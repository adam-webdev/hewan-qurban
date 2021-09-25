@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')
<div class="row justify-content-between">
    <h3>
        Data Hewan Qurban
    </h3>
    <a href="{{route('sapi.create')}}" class="btn btn-primary"> + Tambah</a>
</div>

<hr>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="bg-dark text-white">
                    <tr align="center">
                        <th>Kode Hewan</th>
                        <th>Jenis Hewan</th>
                        <th>Harga Beli</th>
                        <th>Harga / Kg</th>
                        <th>Qty</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sapi as $sapi)
                    <tr>
                        <td>{{$sapi->kode_sapi}}</td>
                        <td>{{$sapi->jenis_sapi}}</td>
                        <td>@currency($sapi->harga_beli)</td>
                        <td>@currency($sapi->harga_perkilo)</td>
                        <td>{{$sapi->qty}}</td>
                        <td> 
                            @if($sapi->status_pembayaran === "Belum Terjual")
                            <div class="btn btn-sm btn-danger">Belum Terjual</div>
                            @else
                            <div class="btn btn-sm btn-success">Terjual</div>
                            @endif
                        </td>
                        <td align="center" width="10%">
                            <a href="{{route('sapi.edit',[$sapi->id])}}" data-toggle="tooltip" title="Edit"
                                class="d-none  d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
                                <i class="fas fa-edit fa-sm text-white-50"></i>
                            </a>
                            <a href="/sapi/hapus/{{$sapi->id}}" data-toggle="tooltip" title="Hapus" 
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