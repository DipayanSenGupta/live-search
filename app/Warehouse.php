<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    protected $table = 'warehouses';

    public function storages()
    {
        return $this->belongsToMany(Storage::class, 'storage_warehouse');
    }
}
