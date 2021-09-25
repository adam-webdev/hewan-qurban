<?php

namespace App\Http\Controllers;

use App\Models\Pengeluaran;
use Illuminate\Http\Request;
use Alert;

class PengeluaranController extends Controller
{
   
    public function index()
    {
        $data = Pengeluaran::all();
        return view('pengeluaran.index',compact('data'));

    }

   
    public function create()
    {
        return view('pengeluaran.create');
    }

  
    public function store(Request $request)
    {
        $data = new Pengeluaran;
        $data->tanggal_pengeluaran = $request->tanggal_pengeluaran;
        $data->keperluan = $request->keperluan;
        $data->total = $request->total;
        $data->save();
        Alert::success('Tersimpan','Data berhasil tersimpan');
        return redirect()->route('pengeluaran.index');
    }

 
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $data = Pengeluaran::findOrFail($id);
        return view('pengeluaran.edit',compact('data'));
    }

  
    public function update(Request $request, $id)
    {
        $data = Pengeluaran::findOrFail($id);
        $data->tanggal_pengeluaran = $request->tanggal_pengeluaran;
        $data->keperluan = $request->keperluan;
        $data->total = $request->total;
        $data->save();
        Alert::success('Terupdate','Data berhasil diubah');
        return redirect()->route('pengeluaran.index');
    }

  
    public function destroy($id)
    {
        $data = Pengeluaran::findOrFail($id);
        $data->delete();
        Alert::success('Terhapus','Data berhasil dihapus');
        return redirect()->route('pengeluaran.index');
    }
}
