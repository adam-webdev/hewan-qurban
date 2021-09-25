@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')

<h3>
    Tambah Data Transaksi
</h3>
<hr>
<form action="{{route('transaksi.store')}}" method="post">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="nama">Nama Pembeli : </label>
                <select name="pembeli_id" id="nama" class="form-control select">
                    @foreach ($pembeli as $p)
                        <option value="{{$p->id}}">{{$p->nama}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="sapi">Kode Sapi : </label>
                <select name="sapi_id" id="sapi" class="form-control select">
                    @foreach ($sapi as $s)
                        <option value="{{$s->id}}">{{$s->kode_sapi}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="jumlah_sapi">Jumlah Sapi : </label>
                <input type="number" name="jumlah_sapi" id="jumlah_sapi" class="form-control" required >
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="harga_jual">Harga Jual : </label>
                <input type="number" name="harga_jual" id="harga_jual" class="form-control" required >
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="down_payment">Uang DP : </label>
                <input type="number" name="down_payment" id="down_payment" class="form-control" required >
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="tanggal_pengiriman">Tangggal Pengiriman </label>
                <input type="date" name="tanggal_pengiriman" id="tanggal_pengiriman" class="form-control" required >
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="status_kirim">Status Pengiriman: </label>
               <select name="status_kirim" class="form-control" id="status_kirim">
                <option selected disabled value="">--- Status Pengiriman ---</option>
                   <option value="Belum Dikirim">Belum Dikirim</option>
                   <option value="Sedang Dikirim">Sedang Dikirim</option>
                   <option value="Sudah Dikirim">Sudah Dikirim</option>
               </select>
            </div>
        </div>
       
        <div class="col-md-6">
            <div class="form-group">
                <label for="status">Status Pembayaran : </label>
               <select name="status" class="form-control" id="status">
                   <option selected disabled value="">--- Status Pembayaran ---</option>
                   <option value="Belum Lunas">Belum Lunas</option>
                   <option value="Lunas"> Lunas</option>
               </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="alamat_pengiriman">Alamat Pengiriman : </label>
                <textarea name="alamat_pengiriman" id="alamat_pengiriman" rows="5"  class="form-control" required></textarea>
            </div>
        </div>
    </div>
    <a href="{{route('transaksi.index')}}" class="btn btn-secondary">Kembali</a>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection

@section('scripts')
     <script>
        $(document).ready(function() {
            $('.select').select2({
                tags:true,
                width:'resolve'
            });
        });
    </script>   
@endsection