<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LiveSearch extends Model
{
    protected $fillable = [

        'name', 'address', 'city','code','country'

    ];

}
