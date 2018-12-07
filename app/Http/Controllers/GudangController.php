<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gudang;

class GudangController extends Controller
{
    public function all()
    {
    	$data['gudang'] = \App\Gudang::all();
    	return view('gudang.all')->with($data);
    }

    public function add()
    {
    	return view('gudang.add');
    }

    public function edit($id)
    {
        $data['gudang'] = \App\Gudang::find($id);
        return view('gudang.edit')->with($data);
    }

    public function save(Request $r)
    {
    	$gudang = new \App\Gudang;
    	$gudang->alamat = $r->input('alamat');
    	$gudang->kapasitas = $r->input('kapasitas');
    	$gudang->pic = $r->input('pic');
    	$gudang->save();

    	return redirect()->route('all_gudang');
    }

    public function update(Request $r)
    {
    	$gudang = \App\Gudang::find($r->input('id'));
    	$gudang->alamat = $r->input('alamat');
    	$gudang->kapasitas = $r->input('kapasitas');
    	$gudang->pic = $r->input('pic');
    	$gudang->save();

    	return redirect()->route('all_gudang');
    }

    public function delete($id)
    {
    	\App\Gudang::find($id)->delete();

    	return redirect()->route('all_gudang');
    }
}
