@extends('layouts.mbd')

@section('content')
<div class="section-title text-center center">
      <h2>Table hasil Procedure transaksi</h2>
      <hr>
    </div>

    @if(isset($query4))
    <table class="table table-bordered table-hover table-light table-striped">
    <thead>
        <tr>
            <td>T_ID</td>
            <td>PEM_ID</td>
            <td>PEG_ID</td>
            <td>T_TANGGAL</td>
            <td>T_TGL_MASUK</td>
            <td>T_TGL_JADI</td>
            <td>T_TGL_AMBIL</td>
            <td>T_HARGA_TOTAL</td>
        </tr>
    </thead>
    <tbody>
        @foreach($query4 as $req)
        <tr>
            <td>{{ $req->T_ID }}</td>
            <td>{{ $req->PEM_ID }}</td>
            <td>{{ $req->PEG_ID }}</td>
            <td>{{ $req->T_TANGGAL }}</td>
            <td>{{ $req->T_TGL_MASUK }}</td>
            <td>{{ $req->T_TGL_JADI }}</td>
            <td>{{ $req->T_TGL_AMBIL }}</td>
            <td>{{ $req->T_HARGA_TOTAL }}</td>
        </tr>
        @endforeach
      
        </tbody>
        </table>
        @endif
        @endsection