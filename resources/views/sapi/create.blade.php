@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')

<h3>
    Tambah Data Hewan Qurban
</h3>
<hr>
<form action="{{route('sapi.store')}}" method="post">
    @csrf
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="nama">Kode Hewan : </label>
                <input type="text" name="kode_sapi" id="nama" class="form-control" required >
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="email">Jenis Hewan : </label>
                <input type="text" name="jenis_sapi" id="email" class="form-control" required >
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="berat">Berat : </label>
                <input type="number" name="berat_sapi" id="berat" class="form-control" required >
            </div>
        </div>
        
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="harga_beli">Harga Beli : </label>
                <input type="number" name="harga_beli" id="harga_beli" class="form-control" required >
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="harga_perkilo">Harga / kg: </label>
                <input type="number" name="harga_perkilo" id="harga_perkilo" class="form-control" required >
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="qty">Jumlah : </label>
                <input type="number" name="qty" id="qty" class="form-control" required >
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="status">Status : </label>
                <select class="form-control" name="status" id="status">
                    <option disabled value="">Status Terjual</option>
                    <option value="Terjual">Terjual</option>
                    <option value="Belum Terjual">Belum Terjual</option>
                </select>
            </div>
        </div>
    </div>
    <a href="{{route('pembeli.index')}}" class="btn btn-secondary">Kembali</a>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection