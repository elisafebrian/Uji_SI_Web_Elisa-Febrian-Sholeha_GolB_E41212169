<?php

namespace App\Http\Controllers;

use App\Models\Pangan;
use Illuminate\Http\Request;

class PanganController extends Controller
{
    public function test(){
        return view('create');
    }
    public function basictable()
    {
        $item = Pangan::all();
        return view('basictable', compact('item'));
    }
 

    public function tambah(Request $request){

        Pangan::create($request->all());
      
        return redirect()->route('basictable');
    }
    public function delete($id){
        $data = Pangan::find($id);
        $data->delete();
        return redirect()->route('basictable');
    }
    public function update(Request $request, $id){
        $data = Pangan::find($id);
        $data->update($request->all());
        return redirect()->route('basictable');
    }
    public function tampilupdate($id){
        $data = Pangan::find($id);
        return view('tampilupdate',compact('data')); 
    }
    
    
    // public function tampildata(){

    //     return view('basictable', compact('item'));
    // }

}
