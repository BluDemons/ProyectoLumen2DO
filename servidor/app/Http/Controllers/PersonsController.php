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
        $sql = "insert into persons(per_ci, name, phone, email) values(?,?,?,?)";
        $parameters = [$data['per_ci'], $data['name'], $data['phone'], $data['email']];
        $response = DB::select($sql, $parameters);
        return $response;
    }

    public function updatePerson(Request $request)
     { 
        $data = $request -> json() -> all();
        $sql = "update persons set per_ci = ?, name = ?, phone = ?, email = ?";
        $parameters =[$data['per_ci'], $data['name'], $data['phone'], $data['email']];
        $response = DB::select($sql, $parameters);
        return $response;
     }

    public function deletePerson(Request $request){
        $data = $request -> json() -> all();
        $sql = "delete from persons where per_ci = ?";
        $parameters = [$data['per_ci']];
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
            $data['per_ci'],
            $data['name'],
            $data['phone'],
            $data['email'],
        ]);
            DB::commit(); 
        }
        catch(Exception $e){
            return response()->json($e, 400);
        }

            return response()->json($person, 200);
    }
}