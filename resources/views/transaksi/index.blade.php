@extends('layouts.layout')
@section('content')
@include('sweetalert::alert')
<div class="row justify-content-between">
    <h3>
        Data Transaksi
    </h3>
    <a href="{{route('transaksi.create')}}" class="btn btn-primary"> + Tambah</a>
    <a href="{{route('transaksi.export_excel')}}" class="btn btn-primary"> Export Excel</a>
</div>

<hr>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table style="font-size: 12px!important; padding:0;" class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="bg-dark text-white" style="font-size: 12px!important; padding:0;">
                    <tr align="center" >
                        <th>Kode Sapi</th>
                        <th>Pembeli</th>
                        <th>DP</th>
                        <th>Harga Jual</th>
                        <th>Sisa Pembayaran</th>
                        <th>Tanggal Kirim</th>
                        <th>Alamat Kirim</th>
                        <th>Status Pembayaran</th>
                        <th>Status Pengiriman</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaksi as $transaksi)
                    <tr>
                        <td>{{$transaksi->sapi->kode_sapi}}</td>
                        <td>{{$transaksi->pembeli->nama}}</td>
                        <td>@currency($transaksi->down_payment)</td>
                        <td>@currency($transaksi->harga_jual)</td>
                        <td>@currency($transaksi->harga_jual - $transaksi->down_payment)</td>
                        <td>{{ Carbon\Carbon::parse($transaksi->tanggal_pengiriman)->isoFormat('dddd, D MMMM Y') }}</td>
                        <td>{{$transaksi->alamat_pengiriman}}</td>
                        <td>
                            @if($transaksi->status==="Lunas")
                            <div class="btn btn-sm btn-success">Lunas</div>
                            @else
                            <div class="btn btn-sm btn-danger">Belum Lunas</div>
                            @endif
                        </td>
                        <td>
                            @if($transaksi->status_kirim=="Belum dikirim")
                            <div class="btn btn-sm btn-danger">Belum Dikirim</div>
                            @elseif($transaksi->status_kirim=="Sedang Dikirim")
                            <div class="btn btn-sm btn-warning">Sedang Dikirim</div>
                            @else
                            <div class="btn btn-sm btn-success">Sudah Dikirim</div>
                            @endif
                        </td>
                        <td align="center" width="10%">
                            <a href="{{route('transaksi.edit',[$transaksi->id])}}" data-toggle="tooltip" title="Edit"
                                class="d-none  d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
                                <i class="fas fa-edit fa-sm text-white-50"></i>
                            </a>
                            <a href="/transaksi/hapus/{{$transaksi->id}}" data-toggle="tooltip" title="Hapus" 
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