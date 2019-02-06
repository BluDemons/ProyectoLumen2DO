<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class TravelController extends Controller
{
    public function crearTravel(Request $request)
    {
        $data = $request -> json() -> all();
        $sql = "insert into travels(name, fechaSalida) values(?,?)";
        $parameters = [$data['name'], $data['fechaSalida']];
        $response = DB::select($sql, $parameters);
        return $response;
    }

    public function actualizarTravel(Request $request)
     { 
        $data = $request -> json() -> all();
        $sql = "update travels set name = ?, fechaSalida = ?";
        $parameters = [$data['name'], $data['fechaSalida']];
        $response = DB::select($sql, $parameters);
        return $response;
     }

    public function eliminarTravel(Request $request){
        $data = $request -> json() -> all();
        $sql = "delete from travels where id = ?";
        $parameters = [$data['id']];
        $response = DB::select($sql, $parameters);
        return $response;
    }

    public function traerTravel(Request $request)
    {
        $data = $request->json()->all();
        $sql = "select * from travels";
        $response = DB::select($sql);
        return $response;

    }
}