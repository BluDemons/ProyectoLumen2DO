<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReserveDetails extends Model
{
    protected $fillable = [
        'seat_id', 'reserve_id'
    ];
}