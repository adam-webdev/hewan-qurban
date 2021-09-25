<?php

namespace App\Http\Controllers;

use App\Models\{Sapi,Pembeli};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Alert;

class PembeliController extends Controller
{
  
    public function index()
    {
        $pembeli = Pembeli::all();
       
        return view('pembeli.index',compact('pembeli'));
    }
    public function dashboard()
    {
        $pembeli = Pembeli::count();
        $sapi = Sapi::count();
        return view('dashboard',compact('pembeli','sapi'));
    }

    public function create()
    {
        return view('pembeli.create');
    }

    
    public function store(Request $request)
    {
        $pembeli = new Pembeli;
        $pembeli->nama  = $request->nama;
        $pembeli->no_hp1 = $request->no_hp1;
        $pembeli->no_hp2 = $request->no_hp2;
        $pembeli->email = $request->email;
        $pembeli->alamat = $request->alamat;
        $pembeli->save();

        Alert::success('Tersimpan','Data Berhasil Disimpan');
        return redirect()->route('pembeli.index');
    }

  
    public function show()
    {
        //
    }

 
    public function edit($id)
    {
        $pembeli = Pembeli::findOrFail($id);
        return view('pembeli.edit',compact('pembeli'));
    }

  
    public function update(Request $request,$id)
    {
        $pembeli = Pembeli::findOrFail($id);
        $pembeli->nama  = $request->nama;
        $pembeli->no_hp1 = $request->no_hp1;
        $pembeli->no_hp2 = $request->no_hp2;
        $pembeli->email = $request->email;
        $pembeli->alamat = $request->alamat;
        $pembeli->save();
        Alert::success('Terupdate','Data Berhasil Diubah');
        return redirect()->route('pembeli.index');
    }

  
    public function delete($id)
    {
        $pembeli = Pembeli::findOrFail($id);
        $pembeli->delete();
        Alert::success('Terhapus','Data Berhasil Terhapus');
        return redirect()->route('pembeli.index');
    }
}
