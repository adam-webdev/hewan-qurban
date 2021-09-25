@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')
<div class="row justify-content-between">
    <h3>
        Data Pembeli
    </h3>
    <a href="{{route('pembeli.create')}}" class="btn btn-primary"> + Tambah</a>
</div>

<hr>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="bg-dark text-white">
                    <tr align="center">
                        <th>Nama</th>
                        <th>No Hp1</th>
                        <th>No Hp2</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pembeli as $pembeli)
                    <tr>
                        <td>{{$pembeli->nama}}</td>
                        <td>{{$pembeli->no_hp1}}</td>
                        <td>{{$pembeli->no_hp2}}</td>
                        <td>{{$pembeli->email}}</td>
                        <td>{{$pembeli->alamat}}</td>
                        <td align="center" width="10%">
                            <a href="{{route('pembeli.edit' ,[$pembeli->id])}}" data-toggle="tooltip" title="Edit"
                                class="d-none  d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
                                <i class="fas fa-edit fa-sm text-white-50"></i>
                            </a>
                            <a href="/pembeli/hapus/{{$pembeli->id}}" data-toggle="tooltip" title="Hapus" 
                                onclick="return confirm('Yakin Ingin menghapus data?')"
                                class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                                <i class="fas fa-trash-alt fa-sm text-white-50"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection