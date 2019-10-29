<?php

use Illuminate\Database\Seeder;
use App\Warehouse;
class WarehousesTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Warehouse::create([
            'name' => 'Gulshan, Dhaka'
            ,'code' => "DangerousGoods-1122"
            ,'available_space' => 8000
            ,'solution_type' => 'E-Commerce Fulfillment'
            ,'facilities' => 'Frozen'
            ,'image'=> 'warehouse_feature/feature1.jpg'
            ,'image_1' =>'warehouse_img/11.jpg'
            ,'image_2'=> 'warehouse_img/22.jpg.jpg'
            ,'image_3'=> 'warehouse_img/33.jpg'
            ,'image_4'=> 'warehouse_img/44.jpg'
            ,'image_5'=> 'warehouse_img/55.jpg'
            ,'address'=> 'GulShan 01, Dhaka'
            ,'description'=> "Common outdoor loading dock, forklift service available with driver."
            ,'approved'=> 1
            ,'electric'=> "Electric"
            ,'temperature'=> "Temperature"	
            ,'security'=>	"Security"
            ,'opening_time'=>'13:10'
            ,'closing_time'=>'00:00'	
            ,'all_time'=>1
            ,'propertyOwner'=>6
        ]);

        Warehouse::create([
            'name' => 'Lalmatia ,Dhaka'
            ,'code' => "Warehouse-111"
            ,'available_space' => 320
            ,'solution_type' => 'Retail Fulfillment'
            ,'facilities' => 'Ambient'
            ,'image'=> 'warehouse_feature/28251-fet.jpg'
            ,'image_1' =>'warehouse_img/28379-1.jpg'
            ,'image_2'=> 'warehouse_img/85705-2.jpg'
            ,'image_3'=> 'warehouse_img/43632-3.jpg'
            ,'image_4'=> 'warehouse_img/65964-4.jpg'
            ,'image_5'=> 'warehouse_img/94152-5.jpg'
            ,'address'=> 'Lalmatia, Dhaka'
            ,'description'=> "Common outdoor loading dock, forklift service available with driver."
            ,'approved'=> 1
            ,'electric'=> "Electric"
            ,'temperature'=> "Temperature"	
            ,'security'=>	"Security"
            ,'opening_time'=>'13:00'
            ,'closing_time'=>'00:00'	
            ,'all_time'=>1
            ,'propertyOwner'=>6
        ]);

        Warehouse::create([
            'name' => 'Uttara ,Dhaka'
            ,'code' => "Warehouse-12"
            ,'available_space' => 1200
            ,'solution_type' => 'Kitting and Special Projects'
            ,'facilities' => 'Not Controlled Temp.'
            ,'image'=> 'warehouse_feature/67969-fet.jpg'
            ,'image_1' =>'warehouse_img/52603-1.jpg'
            ,'image_2'=> 'warehouse_img/91418-2.jpg'
            ,'image_3'=> 'warehouse_img/15002-3.jpg'
            ,'image_4'=> 'warehouse_img/75938-4.jpg'
            ,'image_5'=> 'warehouse_img/97676-5.jpg'
            ,'address'=> 'Sector 02, Uttara '
            ,'description'=> "Common outdoor loading dock, forklift service available with driver."
            ,'approved'=> 1
            ,'electric'=> "Electric"
            ,'temperature'=> "Temperature"	
            ,'security'=>	"Security"
            ,'opening_time'=>'10:00'
            ,'closing_time'=>'22:00'	
            ,'all_time'=>1
            ,'propertyOwner'=>6
        ]);

        Warehouse::create([
            'name' => 'Banani ,Dhaka'
            ,'code' => "Warehouse-13"
            ,'available_space' => 1200
            ,'solution_type' => 'Warehouse Storage'
            ,'facilities' => 'CC Camera,24/7 Security'
            ,'image'=> 'warehouse_feature/27582-fet.jpg'
            ,'image_1' =>'warehouse_img/87577-1.jpg'
            ,'image_2'=> 'warehouse_img/64019-2.jpg'
            ,'image_3'=> 'warehouse_img/16948-3.jpg'
            ,'image_4'=> 'warehouse_img/22066-4.jpg'
            ,'image_5'=> 'warehouse_img/19056-5.jpg'
            ,'address'=> 'Banani, Dhaka'
            ,'description'=> "Common outdoor loading dock, forklift service available with driver."
            ,'approved'=> 1
            ,'electric'=> "Electric"
            ,'temperature'=> "Temperature"	
            ,'security'=>	"Security"
            ,'opening_time'=>'10:00'
            ,'closing_time'=>'22:00'	
            ,'all_time'=>1
            ,'propertyOwner'=>6
        ]);

        Warehouse::create([
            'name' => 'Dhanmondi ,Dhaka'
            ,'code' => "Warehouse-14"
            ,'available_space' => 1200
            ,'solution_type' => 'E-Commerce Fulfillment'
            ,'facilities' => 'CC Camera,24/7 Security'
            ,'image'=> 'warehouse_feature/99916-fet.jpg'
            ,'image_1' =>'warehouse_img/51713-1.jpg'
            ,'image_2'=> 'warehouse_img/42450-2.jpg'
            ,'image_3'=> 'warehouse_img/81304-3.jpg'
            ,'image_4'=> 'warehouse_img/55743-4.jpg'
            ,'image_5'=> 'warehouse_img/53289-5.jpg'
            ,'address'=> 'Dhanmondi 8/A, Dhaka'
            ,'description'=> "Common outdoor loading dock, forklift service available with driver."
            ,'approved'=> 1
            ,'electric'=> "Electric"
            ,'temperature'=> "Temperature"	
            ,'security'=>	"Security"
            ,'opening_time'=>'10:00'
            ,'closing_time'=>'22:00'	
            ,'all_time'=>1
            ,'propertyOwner'=>6
        ]);

        Warehouse::create([
            'name' => 'Mirpur ,Dhaka'
            ,'code' => "Warehouse-15"
            ,'available_space' => 1200
            ,'solution_type' => 'Retail Fulfillment'
            ,'facilities' => 'Critical Inventory Logistics'
            ,'image'=> 'warehouse_feature/23097-fet.jpg'
            ,'image_1' =>'warehouse_img/49003-1.jpg'
            ,'image_2'=> 'warehouse_img/22023-2.jpg'
            ,'image_3'=> 'warehouse_img/22755-3.jpg'
            ,'image_4'=> 'warehouse_img/30931-4.jpg'
            ,'image_5'=> 'warehouse_img/25559-5.jpg'
            ,'address'=> 'Minpur-2, Dhaka'
            ,'description'=> "Common outdoor loading dock, forklift service available with driver."
            ,'approved'=> 1
            ,'electric'=> "Electric"
            ,'temperature'=> "Temperature"	
            ,'security'=>	"Security"
            ,'opening_time'=>'10:00'
            ,'closing_time'=>'22:00'	
            ,'all_time'=>1
            ,'propertyOwner'=>6
        ]);

        Warehouse::create([
            'name' => 'Mohammadpur ,Dhaka'
            ,'code' => "Warehouse-16"
            ,'available_space' => 1200
            ,'solution_type' => 'Kitting and Special Projects'
            ,'facilities' => 'Packaging/ Wrapping'
            ,'image'=> 'warehouse_feature/61534-fet.jpg'
            ,'image_1' =>'warehouse_img/61116-1.jpg'
            ,'image_2'=> 'warehouse_img/86753-2.jpg'
            ,'image_3'=> 'warehouse_img/21978-3.jpg'
            ,'image_4'=> 'warehouse_img/81831-4.jpg'
            ,'image_5'=> 'warehouse_img/33448-5.jpg'
            ,'address'=> 'Adabor, Mohhamdpur'
            ,'description'=> "Common outdoor loading dock, forklift service available with driver."
            ,'approved'=> 1
            ,'electric'=> "Electric"
            ,'temperature'=> "Temperature"	
            ,'security'=>	"Security"
            ,'opening_time'=>'10:00'
            ,'closing_time'=>'22:00'	
            ,'all_time'=>1
            ,'propertyOwner'=>6
        ]);

        Warehouse::create([
            'name' => 'Shahazadpur, Badda'
            ,'code' => "WRS-SEGMENT-17"
            ,'available_space' => 350
            ,'solution_type' => 'Warehouse Storage'
            ,'facilities' => 'Truck Parking'
            ,'image'=> 'warehouse_feature/74609-fet.jpg'
            ,'image_1' =>'warehouse_img/47541-1.jpg'
            ,'image_2'=> 'warehouse_img/94580-2.jpg'
            ,'image_3'=> 'warehouse_img/13059-3.jpg'
            ,'image_4'=> 'warehouse_img/25371-4.jpg'
            ,'image_5'=> 'warehouse_img/79847-5.jpg'
            ,'address'=> 'Link Road, Middle Badda'
            ,'description'=> "Link Road, Middle Badda"
            ,'approved'=> 1
            ,'electric'=> "Electric"
            ,'temperature'=> "Temperature"	
            ,'security'=>	"Security"
            ,'opening_time'=>'10:00'
            ,'closing_time'=>'22:00'	
            ,'all_time'=>1
            ,'propertyOwner'=>9
        ]);

        Warehouse::create([
            'name' => 'Jigatola Wirehouse'
            ,'code' => "jigatola1111"
            ,'available_space' => 1300
            ,'solution_type' => 'E-Commerce Fulfillment'
            ,'facilities' => 'Packaging/ Wrapping'
            ,'image'=> 'warehouse_feature/36281-fet.jpg'
            ,'image_1' =>'warehouse_img/87082-4.jpg'
            ,'image_2'=> 'warehouse_img/82959-3.jpg'
            ,'image_3'=> 'warehouse_img/70943-1.jpg'
            ,'image_4'=> 'warehouse_img/95261-2.jpg'
            ,'image_5'=> 'warehouse_img/76483-5.jpg'
            ,'address'=> 'Jigatola, Dhaka'
            ,'description'=> "<missing>"
            ,'approved'=> 1
            ,'electric'=> "Electric"
            ,'temperature'=> ""	
            ,'security'=>	""
            ,'opening_time'=>'09:00'
            ,'closing_time'=>'12:00'	
            ,'all_time'=>1
            ,'propertyOwner'=>10
        ]);

        Warehouse::create([
            'name' => 'CBC2'
            ,'code' => "Warehouse-11"
            ,'available_space' => 1800
            ,'solution_type' => 'Retail Fulfillment'
            ,'facilities' => 'Critical Inventory Logistics'
            ,'image'=> 'warehouse_feature/12803-1.jpg'
            ,'image_1' =>'warehouse_img/47428-1.jpg'
            ,'image_2'=> 'warehouse_img/50152-2.jpg'
            ,'image_3'=> 'warehouse_img/38239-3.jpg'
            ,'image_4'=> 'warehouse_img/80644-4.jpg'
            ,'image_5'=> 'warehouse_img/74992-5.jpg'
            ,'address'=> 'New Pulton, Dhaka.'
            ,'description'=> "Looking for Month to Month Storage/Warehouse in St. Louis Park"
            ,'approved'=> 1
            ,'electric'=> "Electric"
            ,'temperature'=> "Temperature"	
            ,'security'=>	"Security"
            ,'opening_time'=>'10:10'
            ,'closing_time'=>'22:10'	
            ,'all_time'=>1
            ,'propertyOwner'=>10
        ]);

        Warehouse::create([
            'name' => 'Warehouse 560'
            ,'code' => "Warehouse-111_66"
            ,'available_space' => 350
            ,'solution_type' => 'Kitting and Special Projects'
            ,'facilities' => '24/7 Security'
            ,'image'=> 'warehouse_feature/81364-fet.jpg'
            ,'image_1' =>'warehouse_img/41109-1.jpg'
            ,'image_2'=> 'warehouse_img/84892-2.jpg'
            ,'image_3'=> 'warehouse_img/40833-3.jpg'
            ,'image_4'=> 'warehouse_img/70387-4.jpg'
            ,'image_5'=> 'warehouse_img/45882-5.jpg'
            ,'address'=> 'Mohakhali, Dhaka'
            ,'description'=> "Common outdoor loading dock, forklift service available with driver."
            ,'approved'=> 1
            ,'electric'=> "Electric"
            ,'temperature'=> "Temperature"	
            ,'security'=>	"Security"
            ,'opening_time'=>'10:10'
            ,'closing_time'=>'22:10'	
            ,'all_time'=>1
            ,'propertyOwner'=>11
        ]);

        Warehouse::create([
            'name' => 'Shahbag Warehouse'
            ,'code' => "sp03092019"
            ,'available_space' => 1000
            ,'solution_type' => 'Warehouse Storage'
            ,'facilities' => 'Truck Parking'
            ,'image'=> 'warehouse_feature/97205-1.jpg'
            ,'image_1' =>'warehouse_img/56681-2.jpg'
            ,'image_2'=> 'warehouse_img/93441-3.jpg'
            ,'image_3'=> 'warehouse_img/43436-4.jpg'
            ,'image_4'=> 'warehouse_img/19986-5.jpg'
            ,'image_5'=> 'warehouse_img/67898-6.jpg'
            ,'address'=> 'Shahbag, Dhaka'
            ,'description'=> "<missing>"
            ,'approved'=> 1
            ,'electric'=> "Electric"
            ,'temperature'=> "Temperature"	
            ,'security'=>	"Security"
            ,'opening_time'=>'10:00'
            ,'closing_time'=>'16:00'	
            ,'all_time'=>1
            ,'propertyOwner'=>14
        ]);
    }
}
