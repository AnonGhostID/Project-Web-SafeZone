<?php

namespace App\Http\Controllers;

use App\Models\Diary;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('karyawan', [
            'karyawan' => Diary::latest()->get()
        ]);
    }

    public function insert()
    {
        return view('karyawan_insert');
    }

    public function insert_action(Request $request)
    {

        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'kelas' => 'required',
            'tanggal' => 'required',
            'diary' => 'required'
        ]);

        Diary::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'kelas' => $request->kelas,
            'tanggal' => $request->tanggal,
            'diary' => $request->diary,
        ]);

        return redirect()->route('dashboard')->with('pesan', 'Data Berhasil Ditambahkan!');
    }

    public function edit($id)
    {
        return view('karyawan_edit', [
            'karyawan' => Diary::find($id)
        ]);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'kelas' => 'required',
            'tanggal' => 'required',
            'diary' => 'required'
        ]);

        Diary::find($id)->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'kelas' => $request->kelas,
            'tanggal' => $request->tanggal,
            'diary' => $request->diary,
        ]);

        return redirect()->route('dashboard')->with('pesan', 'Data Berhasil Diupdate!');
    }

    public function delete($id)
    {
        Diary::find($id)->delete();

        return redirect()->route('dashboard')->with('pesan', 'Data Berhasil Dihapus!');
    }
}
