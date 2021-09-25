@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')

<h3>
    Ubah Data Pengeluaran
</h3>
<hr>
<form action="{{route('pengeluaran.update',[$data->id])}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="tanggal_pengeluaran">Tangggal Pengeluaran : </label>
            <input type="date" value="{{$data->tanggal_pengeluaran}}" name="tanggal_pengeluaran" id="tanggal_pengeluaran" class="form-control" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="keperluan">Keperluan : </label>
                <input type="keperluan" value="{{$data->keperluan}}" name="keperluan" id="keperluan" class="form-control" required autocomplete="off">
            </div>
        </div>
        
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="total">Total : </label>
                <input type="number" value="{{$data->total}}" name="total" id="total" class="form-control" required autocomplete="off">
            </div>
        </div>
       
    </div>
    <a href="{{route('pengeluaran.index')}}" class="btn btn-secondary">Kembali</a>
    <button type="submit" class="btn btn-primary">Ubah</button>
</form>
@endsection