<?php
namespace App\Http\Controllers;
use App\Models\Pangan;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Response;

class ApiPanganController extends Controller
{
    public function getAll()
    //membuat class untuk menangkap semua data yg brada pada pekerjaan
    {
        $pekerjaan = Pangan::all();
        return Response::json($pekerjaan, 201);
    }
    public function getPen($id)
    //class yang menangkap berdasarkan id
    {
        $pekerjaan =Pangan::find($id);
        return Response::json($pekerjaan, 200);
    }
    public function createPen(Request $request)
    //class menangkap create session
    {
       Pangan::create($request->all());

        return response()->json([
            'status' => 'ok',
            'message'=>'Pekerjaan berhasil ditambahkan!'
        ], 201);
    }
    public function updatePen($id, Request $request)
    //class untuk update yang melakukan request berdasarkan id pada field
    {
       Pangan::find($id)->update($request->all());

        return response()->json([
            'status' => 'ok',
            'message'=>'Pekerjaan berhasil dirubah!'
        ], 201);
    }
    public function deletePen($id)
    //class function delete
    {
       Pangan::destroy($id);

        return response()->json([
            'status' => 'ok',
            'message'=>'Pekerjaan berhasil dihapus!'
        ], 201);
    }


}

