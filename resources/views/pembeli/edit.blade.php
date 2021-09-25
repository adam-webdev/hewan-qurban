@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')

<h3>
    Ubah Data Pembeli
</h3>
<hr>
<form action="{{route('pembeli.update',[$pembeli->id])}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="nama">Nama : </label>
            <input type="text" value="{{$pembeli->nama}}" name="nama" id="nama" class="form-control" required autocomplete="off">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="email">Email : </label>
                <input type="email" value="{{$pembeli->email}}" name="email" id="email" class="form-control" required autocomplete="off">
            </div>
        </div>
        
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="no_hp2">No Hp 1 : </label>
                <input type="number" value="{{$pembeli->no_hp1}}" name="no_hp2" id="no_hp2" class="form-control" required autocomplete="off">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="no_hp1">No Hp 2: </label>
                <input type="number"  value="{{$pembeli->no_hp2}}" name="no_hp1" id="no_hp1" class="form-control" required autocomplete="off">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="alamat">Alamat : </label>
                <textarea name="alamat"  id="alamat" rows="5"  class="form-control" required>{{$pembeli->alamat}}</textarea>
            </div>
        </div>
    </div>
    <a href="{{route('pembeli.index')}}" class="btn btn-secondary">Kembali</a>
    <button type="submit" class="btn btn-primary">Ubah</button>
</form>
@endsection