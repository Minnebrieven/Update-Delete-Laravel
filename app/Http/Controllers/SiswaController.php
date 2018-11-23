<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jurusan;
use App\Kelas;
use App\Siswa;

class SiswaController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data['siswa'] = \App\Siswa::all();
        return view('siswa.all_siswa')->with($data);
    }

    public function add_siswa()
    {
    	$data['kelas'] = \App\Kelas::all();
		$data['jurusan'] = \App\Jurusan::all();
		return view('siswa.add_siswa')->with($data);
    }
    public function edit($id)
    {
        $data['siswa'] = \App\Siswa::find($id);
        $data['jurusan'] = \App\Jurusan::all();
        $data['kelas'] = \App\Kelas::all();
        return view('siswa.edit_siswa')->with($data);
    }

    public function save(Request $r)
    {
    	$siswa = new Siswa;
    	$siswa->nama = $r->input('nama');
    	$siswa->kelas_id = 0;
    	$siswa->jurusan_id = 0;
    	$siswa->save();

    	// return response()->json($siswa);
        return redirect(url('siswa/all'));
    }

    public function update(Request $r)
    {
    	$siswa = \App\Siswa::find($r->input('id'));
        $siswa->nama = $r->input('nama');
        $siswa->kelas_id = 0;
        $siswa->jurusan_id = 0;
        $siswa->save();

        return redirect(url('siswa/all'));
    }

    public function delete($id)
    {
        \App\Siswa::find($id)->delete();

        return redirect(url('siswa/all'));
    }
}
