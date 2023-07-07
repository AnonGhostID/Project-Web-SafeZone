<?php

namespace App\Http\Controllers;

use App\Models\BimbinganKonseling;
use Illuminate\Http\Request;

class BimbinganKonselingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('konseling', [
            'konseling' => BimbinganKonseling::latest()->get()
        ]);
    }

    public function insert()
    {
        return view('konseling_insert');
    }

    public function insert_action(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'kelas' => 'required',
            'tanggal' => 'required',
            // Add validation rules for other fields as needed
        ]);

        BimbinganKonseling::create($request->all());

        return redirect()->route('Konseling')->with('pesan', 'Tambahinnya berhasil cok');
    }

    public function edit($id)
    {
        return view('konseling_edit', [
            'konseling' => BimbinganKonseling::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'kelas' => 'required',
            'tanggal' => 'required',
            // Add validation rules for other fields as needed
        ]);

        BimbinganKonseling::find($id)->update($request->all());

        return redirect()->route('Konseling')->with('pesan', 'Data Berhasil Diupdate cok');
    }

    public function delete($id)
    {
        BimbinganKonseling::find($id)->delete();

        return redirect()->route('Konseling')->with('pesan', 'Data Berhasil Dihapus! cok');
    }
}
