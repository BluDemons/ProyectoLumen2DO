<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserves;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class ReservesController extends Controller
{
    public function crearReserve(Request $request)
    {
        $data = $request -> json() -> all();
        $sql = "insert into reserves(fechaReserva, person_id, travel_id) values(?,?,?)";
        $parameters = [$data['fechaReserva'], $data['person_id'], $data['travel_id']];
        $response = DB::select($sql, $parameters);
        return $response;
    }

    public function actualizarReserve(Request $request)
     { 
        $data = $request -> json() -> all();
        $sql = "update reserves set fechaReserva = ?, person_id = ?, travel_id = ?";
        $parameters = [$data['fechaReserva'], $data['person_id'], $data['travel_id']];
        $response = DB::select($sql, $parameters);
        return $response;
     }

    public function eliminarReserve(Request $request){
        $data = $request -> json() -> all();
        $sql = "delete from reserves where id = ?";
        $parameters = [$data['id']];
        $response = DB::select($sql, $parameters);
        return $response;
    }

    public function traerReserve(Request $request)
    {
        $data = $request->json()->all();
        $sql = "select * from reserves";
        $response = DB::select($sql);
        return $response;

    }
}