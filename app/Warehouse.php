<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    protected $fillable = [
        'name'
        ,'code'
        ,'available_space'
        ,'solution_type'
        ,'facilities'
        ,'image'
        ,'image_1'
        ,'image_2'
        ,'image_3'
        ,'image_4'
        ,'image_5'
        ,'address'	
        ,'description'
        ,'approved'
        ,'electric'	
        ,'temperature'	
        ,'security'	
        ,'opening_time'	
        ,'closing_time'	
        ,'all_time'
        ,'propertyOwner'    ];
    public function storages()
    {
        return $this->belongsToMany(Storage::class,'storage_warehouse');
    }
}
