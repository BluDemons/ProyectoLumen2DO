<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    protected $fillable = [
        'fechaRserva', 'person_id', 'travel_id'
    ];
}