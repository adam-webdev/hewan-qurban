@extends('layouts.layout')
@section('content')

<h3>Dashboard</h3>
<div class="row mt-4">
    <div class="col-md-4">
    <a class="text-white" href="{{route('pembeli.index')}}" style="text-decoration:none;">
        <div class="card p-4 text-white" style="background: linear-gradient(to right, #2600ff 0%, #243ba0 100%);">
            <i class="fa fa-users fa-2x" aria-hidden="true"></i>
            <div class="row">
                <h4 class="mr-4">Pembeli</h4>
                <h1>{{$pembeli}}</h1>
            </div>
        </div>
    </a>
    </div>
    <div class="col-md-4">
    <a class="text-white" href="{{route('sapi.index')}}" style="text-decoration:none;">
        <div class="card p-4 text-white" style="background: linear-gradient(to right, #2f00ff 0%, #040f6e 100%);">
            <i class="fas fa-horse-head fa-2x" aria-hidden="true"></i>
            <div class="row">
                <h4 class="mr-4">Sapi</h4>
                <h1>{{$sapi}}</h1> <h5 class="ml-4 mt-4">Ekor</h5>
            </div>
        </div>
    </a>
    </div>
    <div class="col-md-4">
    <a class="text-white" href="{{route('transaksi.index')}}" style="text-decoration:none;">
        <div class="card p-4 text-white" style="background: linear-gradient(to right, #2f00ff 0%, #040f6e 100%);">
            <i class="fa fa-money-check fa-2x" aria-hidden="true"></i>
            <div class="row">
                <h4 class="mr-4">transaksi</h4>
                <h1>{{$transaksi}}</h1>
            </div>
        </div>
    </a>
    </div>
</div>
@endsection