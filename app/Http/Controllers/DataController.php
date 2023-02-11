<?php

namespace App\Http\Controllers;

use App\Models\Data;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function createData(){
        return view('createData');
    }

    public function show(){
        $karyawan = Data::all();
        return view('welcome', compact('karyawan'));
    }
    public function storeData (Request $req){
        Data::create([
         'Name'=>$req->Name,
        'Age'=>$req->Age,
        'Address'=>$req->Address,
        'Telephone'=>$req->Telephone

        ]);
        return redirect()->back();
    }
    public function edit($id){
        $karyawan2 = Data::findOrFail($id);
        return view('editData', compact('karyawan2'));
    }
    public function update(Request $request, $id){
        Data::findOrFail($id)->update([
            'Name'=>$request->Name,
            'Age'=>$request->Age,
            'Address'=>$request->Address,
            'Telephone'=>$request->Telephone,
            
        ]);
        return redirect('/');
    }
    public function delete($id){
        Data::destroy($id);
        return redirect('/');
    }

}
