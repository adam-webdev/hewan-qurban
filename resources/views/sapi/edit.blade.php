@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')

<h3>
    Edit Data Hewan
</h3>
<hr>
<form action="{{route('sapi.update',[$sapi->id])}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="nama">Kode Hewan : </label>
                <input type="text" value="{{$sapi->kode_sapi}}" name="kode_sapi" id="nama" class="form-control" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="email">Jenis Hewan : </label>
                <input type="text" value="{{$sapi->jenis_sapi}}" name="jenis_sapi" id="email" class="form-control" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="no_hp2">Berat : </label>
                <input type="number" value="{{$sapi->berat_sapi}}" name="berat_sapi" id="no_hp2" class="form-control" required>
            </div>
        </div>
        
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="harga_beli">Harga Beli : </label>
                <input type="number" value="{{$sapi->harga_beli}}" name="harga_beli" id="harga_beli" class="form-control" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="harga_perkilo">Harga / kg: </label>
                <input type="number" value="{{$sapi->harga_perkilo}}" name="harga_perkilo" id="harga_perkilo" class="form-control" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="qty">Jumlah : </label>
                <input type="number" value="{{$sapi->qty}}" name="qty" id="qty" class="form-control" required>
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
    <a href="{{route('sapi.index')}}" class="btn btn-secondary">Kembali</a>
    <button type="submit" class="btn btn-primary">Edit</button>
</form>
@endsection