<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travels extends Model
{
    protected $fillable = [
        'name','fechaSalida'
    ];
}