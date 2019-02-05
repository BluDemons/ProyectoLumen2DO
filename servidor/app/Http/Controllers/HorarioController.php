<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Horario;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class HorarioController extends Controller
{
    public function crearHorario(Request $request)
    {
        $data = $request -> json() -> all();
        $sql = "insert into horario(hora) values(?)";
        $parameters = [$data['hora']];
        $response = DB::select($sql, $parameters);
        return $response;
    }

    public function actualizarHorario(Request $request)
     { 
        $data = $request -> json() -> all();
        $sql = "update horario set hora = ?";
        $parameters = [$data['hora']];
        $response = DB::select($sql, $parameters);
        return $response;
     }

    public function eliminarHorario(Request $request){
        $data = $request -> json() -> all();
        $sql = "delete from horario where horario_id = ?";
        $parameters = [$data['horario_id']];
        $response = DB::select($sql, $parameters);
        return $response;
    }

    public function traerHorarios(Request $request)
    {
        $data = $request->json()->all();
        $sql = "select * from horario";
        $response = DB::select($sql);
        return $response;

    }
}