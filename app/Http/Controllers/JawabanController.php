<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
   
    public function index($id)
    {
        $tanya = PertanyaanModel::find($id);
        return view('jawaban.index',[
            'pertanyaan' => $tanya, 
            'jawaban' => JawabanModel::where("pertanyaan_id",$id)->get()
            ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'isi' =>'required'
        ]);
        JawabanModel::create([
            'isi' => $request->isi,
            'pertanyaan_id' => $request->pertanyaan_id
        ]);
        return redirect('/jawaban'.'/'.$request->pertanyaan_id);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
