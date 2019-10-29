<?php

use Illuminate\Database\Seeder;
use App\Storage;

class StoragesTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $storage = array("Fangkun 3metric tons loading pallet ",
        "Warehouse storage mezzanine rack",
        "Industrial warehouse drive in rack",
        "Warehouse steel cantilever rack",
        "Warehouse storage medium duty rack",
        "warehouse metal stacking rack",
        "Cable reel storage rack",
        "Temperature-Controlled Warehouse",
        "Mezzanine flooring",
        "Multi-tier racking",
        "Mobile shelving",
        "Metal iron storage rack",
        "Shelving",
        "Pallet Racking");
        for($x=0;$x<count($storage);$x++){
            Storage::create([
                'storage'=>$storage[$x]
            ]); 
        }
    }
}
