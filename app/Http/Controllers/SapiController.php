<?php

namespace App\Http\Controllers;

use App\Models\Sapi;
use Illuminate\Http\Request;
use Alert;
use App\Exports\SapiExport;
use Maatwebsite\Excel\Facade\Excel;

class SapiController extends Controller
{
    public function index()
    {
        $sapi = Sapi::all();
        return view('sapi.index',compact('sapi'));
    }

    public function create()
    {
        return view('sapi.create');
    }

    public function export_excel()
    {
        return Excel::download(new SapiExport, 'sapi.xsls');
    }
    public function store(Request $request)
    {
        $sapi = new Sapi;
        $sapi['kode_sapi']  = $request->kode_sapi;
        $sapi['jenis_sapi'] = $request->jenis_sapi;
        $sapi['berat_sapi'] = $request->berat_sapi;
        $sapi['harga_beli'] = $request->harga_beli;
        $sapi['harga_perkilo'] = $request->harga_perkilo;
        $sapi['status_pembayaran'] = $request->status;   
        $sapi['qty'] = $request->qty;
        $sapi->save();
        Alert::success('Tersimpan','Data Berhasil Disimpan');
        return redirect()->route('sapi.index');
    }

  
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    { 
        $sapi = Sapi::findOrFail($id);
        return view('sapi.edit',compact('sapi'));
    }

 
    public function update(Request $request,$id)
    {
       
        $sapi = Sapi::findOrFail($id);
        $sapi['kode_sapi']  = $request->kode_sapi;
        $sapi['jenis_sapi'] = $request->jenis_sapi;
        $sapi['berat_sapi'] = $request->berat_sapi;
        $sapi['harga_perkilo'] = $request->harga_perkilo;
        $sapi['harga_beli'] = $request->harga_beli;
        $sapi['status_pembayaran'] = $request->status;   
        $sapi['qty'] = $request->qty;
        $sapi->save();
        Alert::success('Terupdate','Data Berhasil Diubah');
        return redirect()->route('sapi.index');
    }

   
    public function delete($id)
    {
        $sapi = Sapi::findOrFail($id);
        $sapi->delete();
        Alert::success('Terhapus','Data Berhasil Terhapus');
        return redirect()->route('sapi.index');
    }
}
