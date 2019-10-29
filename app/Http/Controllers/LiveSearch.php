<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Storage;

class LiveSearch extends Controller
{
    function index()
    {
     return view('live_search');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      $warehouse = [];
      $warehousesFetched = [];
      if($query != '')
      {
       
        $data = DB::table('warehouses')
         ->where('name', 'like', '%'.$query.'%')
         ->orWhere('solution_type', 'like', '%'.$query.'%')
         ->orWhere('facilities', 'like', '%'.$query.'%')
         ->orWhere('available_space', 'like', '%'.$query.'%')
         ->orWhere('address', 'like', '%'.$query.'%')
         ->get();

        $data1 = DB::table('storages')
        ->select('id')
        ->where('storage', 'like', '%'.$query.'%')
        ->get();

        $data1 = json_decode($data1, true);
        
        foreach($data1 as $item){
          $id = $item['id'];
          $storage = Storage::find($id);
          $warehouses = $storage->warehouses();
          $warehouses = (array)$warehouses;
          // $warehouses= json_decode($warehouses, true);

          $warehouse = array_merge($warehousesFetched,$warehouses);
        }

        $data = json_decode($data, true);
        $data = array_merge($warehousesFetched,$data);
        // echo json_encode($data);

      }
      else
      {
       $data = DB::table('warehouses')
        //  ->orderBy('CustomerID', 'desc')
         ->get();
      }
      $total_row = count($data);
      echo json_encode($data) ;
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row['name'].'</td>
         <td>'.$row['solution_type'].'</td>
         <td>'.$row['facilities'].'</td>
         <td>'.$row['available_space'].'</td>
         <td>'.$row['address'].'</td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}