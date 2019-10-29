<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
    protected $table = 'storage_types';
    public function warehouses()
    {
        return $this->belongsToMany(Warehouse::class, 'storage_warehouse');
    }
}
