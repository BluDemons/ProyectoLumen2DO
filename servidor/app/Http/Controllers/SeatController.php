<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seat;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class SeatController extends Controller
{
    public function crearSeat(Request $request)
    {
        $data = $request -> json() -> all();
        $sql = "insert into seats(numeroAsiento, bus_id) values(?,?)";
        $parameters = [$data['hora']];
        $response = DB::select($sql, $parameters);
        return $response;
    }

    public function actualizarSeat(Request $request)
     { 
        $data = $request -> json() -> all();
        $sql = "update seats set numeroAsiento = ?, bus_id = ?";
        $parameters = [$data['numeroAsiento'],$data['bus_id']];
        $response = DB::select($sql, $parameters);
        return $response;
     }

    public function eliminarSeat(Request $request){
        $data = $request -> json() -> all();
        $sql = "delete from seats where id = ?";
        $parameters = [$data['id']];
        $response = DB::select($sql, $parameters);
        return $response;
    }

    public function traerSeat(Request $request)
    {
        $data = $request->json()->all();
        $sql = "select * from seats";
        $response = DB::select($sql);
        return $response;

    }
}