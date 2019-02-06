<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReserveDetail extends Model
{
    protected $fillable = [
        'seat_id', 'reserve_id'
    ];
}