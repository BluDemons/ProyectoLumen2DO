<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buses extends Model
{
    protected $fillable = [
        'name', 'state', 'travel_id'
    ];
}