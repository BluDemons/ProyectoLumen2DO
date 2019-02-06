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
        $sql = "insert into persons(ci, name, phone, email, password) values(?,?,?,?,?)";
        $parameters = [$data['ci'], $data['name'], $data['phone'], $data['email'], $data['password']];
        $response = DB::select($sql, $parameters);
        return $response;
    }

    public function actualizarPerson(Request $request)
     { 
        $data = $request -> json() -> all();
        $sql = "update persons set ci = ?, name = ?, phone = ?, email = ?, password = ?";
        $parameters = [$data['ci'], $data['name'], $data['phone'], $data['email'], $data['password']];
        $response = DB::select($sql, $parameters);
        return $response;
     }

    public function eliminarPerson(Request $request){
        $data = $request -> json() -> all();
        $sql = "delete from persons where id = ?";
        $parameters = [$data['id']];
        $response = DB::select($sql, $parameters);
        return $response;
    }

    public function traerPerson(Request $request)
    {
        $data = $request->json()->all();
        $sql = "select * from persons";
        $response = DB::select($sql);
        return $response;

    }
}