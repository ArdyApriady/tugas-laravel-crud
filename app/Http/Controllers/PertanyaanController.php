<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;

class PertanyaanController extends Controller
{
    public function index()
    {
        return view('pertanyaan.index',[
            'pertanyaan'=> PertanyaanModel::all()
            ]);
    }

    public function create()
    {
        return view('pertanyaan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required'
        ]);
        PertanyaanModel::create([
            'judul' => $request->judul,
            'isi' => $request->isi
        ]);

        return redirect('/pertanyaan')->with('status','pertanyaan berhasil diposting');
    }

    public function show($id)
    {
        return view('pertanyaan.show',[
            'detail' => PertanyaanModel::find($id)
        ]);
    }

    public function edit($id)
    {
        return view('pertanyaan.edit',[
            'tanya'=> PertanyaanModel::find($id)]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul'=>'required',
            'isi'=>'required'
        ]);
        PertanyaanModel::where('id',$id)->update([
            'judul' => $request->judul,
            'isi' => $request->isi
        ]);
        return redirect('/pertanyaan')->with('status','berhasil terupdate');
    }

    public function destroy($id)
    {
        JawabanModel::where('pertanyaan_id',$id)->delete();
        PertanyaanModel::destroy($id);
        return redirect('/pertanyaan')->with('status','berhasil dihapus');
    }
}
