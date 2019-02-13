<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seats;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class SeatsController extends Controller
{
    public function crearSeat(Request $request)
    {
        $data = $request -> json() -> all();
        $sql = "insert into seats(number) values(?)";
        $parameters = [$data['number']];
        $response = DB::select($sql, $parameters);
        return $response;
    }

    public function actualizarSeat(Request $request)
     { 
        $data = $request -> json() -> all();
        $sql = "update seats set number = ?";
        $parameters = [$data['number']];
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