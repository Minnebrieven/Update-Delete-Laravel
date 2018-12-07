<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Gudang;

class BarangController extends Controller
{
    public function all()
    {
    	$data['barang'] = \App\Barang::all();
    	return view('barang.all')->with($data);
    }

    public function add()
    {
        $data['gudang'] = \App\Gudang::all();
    	return view('barang.add')->with($data);
    }

    public function edit($id)
    {
        $data['gudang'] = \App\Gudang::all();
    	$data['barang'] = \App\Barang::find($id);
    	return view('barang.edit')->with($data);
    }

    public function save(Request $r)
    {
    	$barang = new \App\Barang;
    	$barang->gudang_id = $r->input('gudang_id');
    	$barang->nama = $r->input('nama');
    	$barang->berat = $r->input('berat');
    	$barang->save();

    	return redirect()->route('all_barang');
    }

    public function update(Request $r)
    {
    	$barang = \App\Barang::find($r->input('id'));
    	$barang->gudang_id = $r->input('gudang_id');
    	$barang->nama = $r->input('nama');
    	$barang->berat = $r->input('berat');
    	$barang->save();

    	return redirect()->route('all_barang');
    }

    public function delete($id)
    {
    	\App\Barang::find($id)->delete();

    	return redirect()->route('all_barang');
    }
}
