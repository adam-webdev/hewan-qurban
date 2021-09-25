@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')
<div class="row justify-content-between">
    <h3>
        Data Pengeluaran Uang
    </h3>
    <a href="{{route('pengeluaran.create')}}" class="btn btn-primary"> + Tambah</a>
</div>

<hr>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="bg-dark text-white">
                    <tr align="center">
                        <th>Tanggal Pengeluaran</th>
                        <th>Keperluan</th>
                        <th>Total</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $data)
                    <tr>
                                                
                        <td>{{ Carbon\Carbon::parse($data->tanggal_pengeluaran)->isoFormat('dddd, D MMMM Y') }}</td>
                        <td>{{$data->keperluan}}</td>
                        <td>@currency($data->total)</td>
                        
                        <td align="center" width="10%">
                            <a href="{{route('pengeluaran.edit' ,[$data->id])}}" data-toggle="tooltip" title="Edit"
                                class="d-none  d-sm-inline-block btn btn-sm btn-success shadow-sm">
                                <i class="fas fa-edit fa-sm text-white-50"></i>
                            </a>
                            <a href="/pengeluaran/hapus/{{$data->id}}" data-toggle="tooltip" title="Hapus" 
                                onclick="return confirm('Yakin Ingin menghapus data?')"
                                class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                                <i class="fas fa-trash-alt fa-sm text-white-50"></i>
                            </a>
                        </td>
                    </tr>
                   
                    @endforeach
                    <tr>
                        <td width="60%"></td>
                        <td width="20%">Total</td>
                        <td width="20%">@currency($data->sum('total'))</td>
                        <td width="20%"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection