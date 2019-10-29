<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
      if($query != '')
      {
       $data = DB::table('warehouses')
         ->where('name', 'like', '%'.$query.'%')
         ->orWhere('solution_type', 'like', '%'.$query.'%')
         ->orWhere('facilities', 'like', '%'.$query.'%')
         ->orWhere('available_space', 'like', '%'.$query.'%')
         ->orWhere('address', 'like', '%'.$query.'%')
         ->get();
        $data1 = DB::table('storage_types')
        ->where('storage_type', 'like', '%'.$query.'%')
        ->get();
        foreach($data1 as $obj){

        }
        echo json_encode($data1);
      }
      else
      {
       $data = DB::table('live_searches')
        //  ->orderBy('CustomerID', 'desc')
         ->get();

      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->name.'</td>
         <td>'.$row->solution_type.'</td>
         <td>'.$row->facilities.'</td>
         <td>'.$row->available_space.'</td>
         <td>'.$row->address.'</td>
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