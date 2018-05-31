@extends('layouts.mbd')

@section('content')

<div class="section-title text-center center">
      <h2>Table Trigger Pegawai</h2>
      <hr>
    </div>

    @if(isset($query2))
    <table class="table table-bordered table-hover table-light table-striped">
    <thead>
        <tr>
            <td>PEG_ID</td>
            <td>PEG_NAMA</td>
            <td>PEG_TGL_LAHIR</td>
            <td>PEG_ALAMAT</td>
            <td>PEG_NOTELP</td>
            <td>BAGIAN</td>
            <td>tgl_perubahan</td>
            <td>statusnya</td>
        </tr>
    </thead>
    <tbody>
        @foreach($query2 as $req)
        <tr>
            <td>{{ $req->PEG_ID }}</td>
            <td>{{ $req->PEG_NAMA }}</td>
            <td>{{ $req->PEG_TGL_LAHIR }}</td>
            <td>{{ $req->PEG_ALAMAT }}</td>
            <td>{{ $req->PEG_NOTELP }}</td>
            <td>{{ $req->BAGIAN }}</td>
            <td>{{ $req->tgl_perubahan }}</td>
            <td>{{ $req->statusnya }}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
        @endif
        @endsection