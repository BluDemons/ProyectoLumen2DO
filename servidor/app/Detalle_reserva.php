<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_reserva extends Model
{
    protected $fillable = [
        'mesa_id', 'reserva_id', 'numerousuarios'
    ];
}