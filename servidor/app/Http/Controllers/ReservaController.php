<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserva;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class ReservaController extends Controller
{
    public function crearReserva(Request $request)
    {
        $data = $request -> json() -> all();
        $sql = "insert into reserva(id, horario_id, fecha) values(?,?,?)";
        $parameters = [$data['id'], $data['horario_id'], $data['fecha']];
        $response = DB::select($sql, $parameters);
        return $response;
    }

    public function actualizarReserva(Request $request)
     { 
        $data = $request -> json() -> all();
        $sql = "update reserva set id = ?, horario_id = ?, fecha = ?";
        $parameters = [$data['id'], $data['horario_id'], $data['fecha']];
        $response = DB::select($sql, $parameters);
        return $response;
     }

    public function eliminarReserva(Request $request){
        $data = $request -> json() -> all();
        $sql = "delete from reserva where reserva_id = ?";
        $parameters = [$data['reserva_id']];
        $response = DB::select($sql, $parameters);
        return $response;
    }

    public function traerReservas(Request $request)
    {
        $data = $request->json()->all();
        $sql = "select * from reserva";
        $response = DB::select($sql);
        return $response;

    }
}