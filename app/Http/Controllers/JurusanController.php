<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jurusan;

class JurusanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['jurusan'] = \App\Jurusan::all();
        return view('jurusan.all_jurusan')->with($data);
    }

    public function add_jurusan()
    {
		$data['jurusan'] = \App\Jurusan::all();
		return view('jurusan.add_jurusan')->with($data);
    }
    public function edit($id)
    {
        $data['jurusan'] = \App\Jurusan::find($id);
        return view('jurusan.edit_jurusan')->with($data);
    }

    public function save(Request $r)
    {
    	$jurusan = new Jurusan;
    	$jurusan->nama = $r->input('nama');
    	$jurusan->jumlah_siswa = $r->input('jumlah_siswa');
    	$jurusan->kajur = $r->input('kajur');
    	$jurusan->save();

    	// return response()->json($siswa);
        return redirect(url('jurusan/all'));
    }

    public function update(Request $r)
    {
    	$jurusan = \App\Jurusan::find($r->input('id'));
        $jurusan->nama = $r->input('nama');
    	$jurusan->jumlah_siswa = $r->input('jumlah_siswa');
    	$jurusan->kajur = $r->input('kajur');
        $jurusan->save();

        return redirect(url('jurusan/all'));
    }

    public function delete($id)
    {
        \App\Jurusan::find($id)->delete();

        return redirect(url('jurusan/all'));
    }
}
