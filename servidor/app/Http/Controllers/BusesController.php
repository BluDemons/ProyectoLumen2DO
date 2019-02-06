<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buses;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class BusesController extends Controller
{
    public function crearBus(Request $request)
    {
        $data = $request -> json() -> all();
        $sql = "insert into buses(name, state, travel_id) values(?,?,?)";
        $parameters = [$data['name'], $data['state'], $data['travel_id']];
        $response = DB::select($sql, $parameters);
        return $response;
    }

    public function actualizarBus(Request $request)
     { 
        $data = $request -> json() -> all();
        $sql = "update buses set name = ?, state = ?, travel_id = ?";
        $parameters = [$data['name'], $data['state'], $data['travel_id']];
        $response = DB::select($sql, $parameters);
        return $response;
     }

    public function eliminarBus(Request $request){
        $data = $request -> json() -> all();
        $sql = "delete from buses where id = ?";
        $parameters = [$data['id']];
        $response = DB::select($sql, $parameters);
        return $response;
    }

    public function traerBus(Request $request)
    {
        $data = $request->json()->all();
        $sql = "select * from buses";
        $response = DB::select($sql);
        return $response;

    }
}