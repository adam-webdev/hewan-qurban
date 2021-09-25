<?php

namespace App\Http\Controllers;

use App\Models\{Pembeli,Transaksi,Sapi};
use Alert;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    

    public function index()
    {
        $transaksi = Transaksi::with('sapi','pembeli')->get();
        
        return view('transaksi.index',compact('transaksi'));
    }

    /**0\
     * 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pembeli = Pembeli::all();
        $sapi = Sapi::all();
        return view('transaksi.create',compact('pembeli','sapi'));
    }

    
    public function store(Request $request)
    {
        $transaksi = new Transaksi;
        $transaksi->pembeli_id = $request->pembeli_id;
        $transaksi->sapi_id = $request->sapi_id;
        $transaksi->harga_jual = $request->harga_jual;
        $transaksi->down_payment = $request->down_payment;
        $transaksi->tanggal_pengiriman = $request->tanggal_pengiriman;
        $transaksi->alamat_pengiriman = $request->alamat_pengiriman;
        $transaksi->status = $request->status;
        $transaksi->status_kirim = $request->status_kirim;
        $transaksi->save();
        Alert::success('Tersimpan','Data Berhasil Tersimpan');
        return redirect()->route('transaksi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
        $sapi = Sapi::all();
        $pembeli = Pembeli::all();
        return view('transaksi.edit',compact('transaksi','sapi','pembeli'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
    
        $transaksi->pembeli_id = $request->pembeli_id;
        $transaksi->sapi_id = $request->sapi_id;
        $transaksi->down_payment = $request->down_payment;
        $transaksi->harga_jual = $request->harga_jual;
        $transaksi->tanggal_pengiriman = $request->tanggal_pengiriman;
        $transaksi->alamat_pengiriman = $request->alamat_pengiriman;
        $transaksi->status = $request->status;
        $transaksi->status_kirim = $request->status_kirim;
        $transaksi->save();
        Alert::success('Terupdate','Data Berhasil Diubah');
        return redirect()->route('transaksi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function delete(Transaksi $transaksi)
    {
        $transaksi->delete();
        Alert::success('Terhapus','Data Berhasil Dihapus');
        return redirect()->route('transaksi.index');
    }
}
