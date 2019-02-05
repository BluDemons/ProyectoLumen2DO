<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class PersonController extends Controller
{
    public function crearPerson(Request $request)
    {
        $data = $request -> json() -> all();
        $sql = "insert into person(pers_ci, nombre, telefono, correo, clave) values(?,?,?,?,?)";
        $parameters = [$data['pers_ci'], $data['nombre'], $data['telefono'], $data['correo'], $data['clave']];
        $response = DB::select($sql, $parameters);
        return $response;
    }

    public function actualizarPerson(Request $request)
     { 
        $data = $request -> json() -> all();
        $sql = "update person set pers_ci = ?, nombre = ?, telefono = ?, correo = ?, clave = ?";
        $parameters = [$data['pers_ci'], $data['nombre'], $data['telefono'], $data['correo'], $data['clave']];
        $response = DB::select($sql, $parameters);
        return $response;
     }

    public function eliminarPerson(Request $request){
        $data = $request -> json() -> all();
        $sql = "delete from person where id = ?";
        $parameters = [$data['id']];
        $response = DB::select($sql, $parameters);
        return $response;
    }

    public function traerPersons(Request $request)
    {
        $data = $request->json()->all();
        $sql = "select * from person";
        $response = DB::select($sql);
        return $response;

    }
}