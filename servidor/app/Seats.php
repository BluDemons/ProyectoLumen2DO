<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seats extends Model
{
    protected $fillable = [
        'numeroAsiento', 'bus_id'
    ];
}