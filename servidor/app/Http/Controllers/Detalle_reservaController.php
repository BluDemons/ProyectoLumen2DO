<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detalle_reserva;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class Detalle_reservaController extends Controller
{
    public function crearDetalle_reserva(Request $request)
    {
        $data = $request -> json() -> all();
        $sql = "insert into detalle_reserva(mesa_id, reserva_id, numerousuarios) values(?,?,?)";
        $parameters = [$data['mesa_id'], $data['reserva_id'], $data['numerousuarios']];
        $response = DB::select($sql, $parameters);
        return $response;
    }

    public function actualizarDetalle_reserva(Request $request)
     { 
        $data = $request -> json() -> all();
        $sql = "update detalle_reserva set mesa_id = ?, reserva_id = ?, numerousuarios = ?";
        $parameters = [$data['mesa_id'], $data['reserva_id'], $data['numerousuarios']];
        $response = DB::select($sql, $parameters);
        return $response;
     }

    public function eliminarDetalle_reserva(Request $request){
        $data = $request -> json() -> all();
        $sql = "delete from detalle_reserva where detalle_reserva_id = ?";
        $parameters = [$data['detalle_reserva_id']];
        $response = DB::select($sql, $parameters);
        return $response;
    }

    public function traerDetalle_reservas(Request $request)
    {
        $data = $request->json()->all();
        $sql = "select * from detalle_reserva";
        $response = DB::select($sql);
        return $response;

    }
}