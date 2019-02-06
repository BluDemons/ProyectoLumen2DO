<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persons;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class PersonsController extends Controller
{
    public function createPerson(Request $request)
    {
        $data = $request -> json() -> all();
        $sql = "insert into persons(ci, name, phone, email, password) values(?,?,?,?,?)";
        $parameters = [$data['ci'], $data['name'], $data['phone'], $data['email'], $data['password']];
        $response = DB::select($sql, $parameters);
        return $response;
    }

    public function updatePerson(Request $request)
     { 
        $data = $request -> json() -> all();
        $sql = "update persons set ci = ?, name = ?, phone = ?, email = ?, password = ?";
        $parameters =[$data['ci'], $data['name'], $data['phone'], $data['email'], $data['password']];
        $response = DB::select($sql, $parameters);
        return $response;
     }

    public function deletePerson(Request $request){
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

    public function getPersons(Request $request){
        try{
            DB::beginTransaction();
        $data = $request->json()->all();

        $person  = Persons::all([
            $data['ci'],
            $data['name'],
            $data['phone'],
            $data['email'],
            $data['password']
        ]);
            DB::commit(); 
        }
        catch(Exception $e){
            return response()->json($e, 400);
        }

            return response()->json($person, 200);
    }
}