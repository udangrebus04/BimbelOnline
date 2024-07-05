<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();
        return view('bimbel.index', compact('kelas'));
    }

    public function create()
    {
        return view('bimbel.create');
    }

    public function store(Request $request){
       
        $request->validate([
            'nama_kelas' => ['required', 'string'],
            'jumlah_siswa' => ['required','integer'],
            'jadwal_kelas' => ['required', 'string'],
        ]);

        $kelas = Kelas::create([
            'nama_kelas' => $request->input('nama_kelas'),
            'jumlah_siswa' => $request->input('jumlah_siswa'),
            'jadwal_kelas' => $request->input('jadwal_kelas'),
        ]);

        return redirect()->route('bimbel.index')->with('success', 'Kelas Baru Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $kelas = Kelas::find($id);
        return view('bimbel.edit', compact('kelas'));
    }

    public function update(Request $request, $id)
    {
        $kelas = Kelas::find($id);
        $kelas->nama_kelas = $request->input('nama_kelas');
        $kelas->jumlah_siswa = $request->input('jumlah_siswa');
        $kelas->jadwal_kelas = $request->input('jadwal_kelas');
        $kelas->save();
        return redirect()->route('bimbel.index');
    }

    public function destroy($id)
    {
        $kelas = Kelas::find($id);
        $kelas->delete();
        return redirect()->route('bimbel.index');
    }
}
