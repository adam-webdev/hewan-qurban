@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')

<h3>
    Tambah Data Pengeluaran
</h3>
<hr>
<form action="{{route('pengeluaran.store')}}" method="post">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="nama">Tanggal Pengeluaran "</label>
                <input type="date" name="tanggal_pengeluaran" id="nama" class="form-control" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="keperluan">Keperluan :</label>
                <textarea class="form-control" name="keperluan" id="keperluan" cols="30" rows="10"></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="total">Total : </label>
                <input type="number" name="total" id="total" class="form-control" required autocomplete="off">
            </div>
        </div>
       
    </div>
    <a href="{{route('pengeluaran.index')}}" class="btn btn-secondary">Kembali</a>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection