<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class DataPegawaiController extends Controller
{
    public function index()
    {
        return view('dataPegawai.index', [
            'pegawai' => Pegawai::all()
        ]);
    }
    public function create()
    {
        return view('dataPegawai.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pegawai' => 'required',
            'divisi_pegawai' => 'required',
            'jenis_kelamin' => 'required',
            'password' => 'required',
        ]);

        $pegawai = new Pegawai();
        $pegawai->nama = $request->nama_pegawai;
        $pegawai->divisi = $request->divisi_pegawai;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->password = bcrypt($request->password);
        $pegawai->save();

        return redirect('data-pegawai');
    }

    public function show( Pegawai $id){
        return view('dataPegawai.show', [
            'pegawai' => $id
        ]);
    }
}
