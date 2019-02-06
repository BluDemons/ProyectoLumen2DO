<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReserveDetail;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class ReserveDetailController extends Controller
{
    public function crearReserveDetail(Request $request)
    {
        $data = $request -> json() -> all();
        $sql = "insert into reserve_details(seat_id, reserve_id) values(?,?)";
        $parameters = [$data['seat_id'], $data['reserve_id']];
        $response = DB::select($sql, $parameters);
        return $response;
    }

    public function actualizarReserveDetail(Request $request)
     { 
        $data = $request -> json() -> all();
        $sql = "update reserve_details set seat_id = ?, reserve_id = ?";
        $parameters = [$data['seat_id'], $data['reserve_id']];
        $response = DB::select($sql, $parameters);
        return $response;
     }

    public function eliminarReserveDetail(Request $request){
        $data = $request -> json() -> all();
        $sql = "delete from reserve_details where id = ?";
        $parameters = [$data['id']];
        $response = DB::select($sql, $parameters);
        return $response;
    }

    public function traerReserveDetail(Request $request)
    {
        $data = $request->json()->all();
        $sql = "select * from reserve_details";
        $response = DB::select($sql);
        return $response;

    }
}