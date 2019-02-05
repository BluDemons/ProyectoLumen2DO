<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mesa;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class MesaController extends Controller
{
    public function crearMesa(Request $request)
    {
        $data = $request -> json() -> all();
        $sql = "insert into mesa(nombre, estado) values(?,?)";
        $parameters = [$data['nombre'], $data['estado']];
        $response = DB::select($sql, $parameters);
        return $response;
    }

    public function actualizarMesa(Request $request)
     { 
        $data = $request -> json() -> all();
        $sql = "update mesa set nombre = ?, estado = ?";
        $parameters = [$data['nombre'], $data['estado']];
        $response = DB::select($sql, $parameters);
        return $response;
     }

    public function eliminarMesa(Request $request){
        $data = $request -> json() -> all();
        $sql = "delete from mesa where mesa_id = ?";
        $parameters = [$data['mesa_id']];
        $response = DB::select($sql, $parameters);
        return $response;
    }

    public function traerMesas(Request $request)
    {
        $data = $request->json()->all();
        $sql = "select * from mesa";
        $response = DB::select($sql);
        return $response;

    }
}