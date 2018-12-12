<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RumahSakit;

class RumahSakitController extends Controller
{
    public function dashboard(){
		return view('rumahsakit.dashboard');
	}

    public function list(){
        $rumahsakits = RumahSakit::all();
    	return view('rumahsakit.index',compact('rumahsakits'));
    }

    public function create(){
    	return view('rumahsakit.create');
    }

     public function edit($id){
     	$rumahsakit = RumahSakit::find($id);
    	return view('rumahsakit.edit', compact('rumahsakit', 'id'));
    }

    public function update(Request $r, $id)
    {
    	$rumahsakit = RumahSakit::find($id);
        $rumahsakit->nama = $r->get('nama');
        $rumahsakit->akreditasi = $r->get('akreditasi');
        $rumahsakit->alamat = $r->get('alamat');        
        $rumahsakit->jenis_rs = $r->get('jenis_rs');        
        $rumahsakit->deskripsi = $r->get('deskripsi');        
        $rumahsakit->save();
        return redirect('rumahsakit')->with('success', 'Berhasil Mengupdate Data');
    }

    public function save(Request $r){
        $rumahsakit = new Rumahsakit();
        $rumahsakit->nama = $r->get('nama');
        $rumahsakit->akreditasi = $r->get('akreditasi');
        $rumahsakit->alamat = $r->get('alamat');
        $rumahsakit->jenis_rs = $r->get('jenis_rs');
        $rumahsakit->deskripsi = $r->get('deskripsi');
        $rumahsakit->save();
        return redirect('rumahsakit')->with('success', 'Berhasil menambahkan data');
    }

    public function delete($id){
    	$rumahsakit = Rumahsakit::find($id);
    	$rumahsakit->delete();
    	return redirect('rumahsakit')->with('success', 'Berhasil menghapus data');
    }
}
