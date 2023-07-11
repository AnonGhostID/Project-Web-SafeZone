<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('report', [
            'report' => Report::latest()->get()
        ]);
    }

    public function insert()
    {
        return view('report_insert');
    }

    public function insert_action(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'kelas' => 'required',
            'tanggal' => 'required',
            'report' => 'required',
            // Add validation rules for other fields as needed
        ]);

        Report::create($request->all());

        return redirect()->route('report')->with('pesan', 'Tambahinnya berhasil');
    }

    public function edit($id)
    {
        return view('report_edit', [
            'report' => Report::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'kelas' => 'required',
            'tanggal' => 'required',
            'report' => 'required',
            // Add validation rules for other fields as needed
        ]);

        Report::find($id)->update($request->all());

        return redirect()->route('report')->with('pesan', 'Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        Report::find($id)->delete();

        return redirect()->route('report')->with('pesan', 'Data Berhasil Dihapus!');
    }
}
