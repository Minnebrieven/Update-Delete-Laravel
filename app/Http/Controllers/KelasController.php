<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;

class KelasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['kelas'] = \App\Kelas::all();
        return view('kelas.all_kelas')->with($data);
    }

    public function add_kelas()
    {
    	$data['kelas'] = \App\Kelas::all();
		$data['jurusan'] = \App\Jurusan::all();
		return view('kelas.add_kelas')->with($data);
    }
    public function edit($id)
    {
        $data['kelas'] = \App\Kelas::find($id);
        $data['jurusan'] = \App\Jurusan::all();
        return view('kelas.edit_kelas')->with($data);
    }

    public function save(Request $r)
    {
    	$kelas = new Kelas;
    	$kelas->nama = $r->input('nama');
    	$kelas->jurusan_id = 0;
    	$kelas->save();

    	// return response()->json($siswa);
        return redirect(url('kelas/all'));
    }

    public function update(Request $r)
    {
    	$siswa = \App\Kelas::find($r->input('id'));
        $siswa->jurusan_id = 0;
        $siswa->nama = $r->input('nama');
        $siswa->save();

        return redirect(url('kelas/all'));
    }

    public function delete($id)
    {
        \App\Kelas::find($id)->delete();

        return redirect(url('kelas/all'));
    }
}
