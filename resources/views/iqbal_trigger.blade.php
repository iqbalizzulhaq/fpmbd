@extends('layouts.mbd')

@section('content')
<div class="section-title text-center center">
      <h2>Table Trigger Pemesan</h2>
      <hr>
    </div>


    @if(isset($query2))
    <table class="table table-bordered table-hover table-light table-striped">
    <thead>
        <tr>
            <td>PEM_ID</td>
            <td>PEM_NAMA</td>
            <td>PEM_TGL_LAHIR</td>
            <td>PEM_ALAMAT</td>
            <td>PEM_NOTELP</td>
            <td>tgl_perubahan</td>
            <td>statusnya</td>
        </tr>
    </thead>
    <tbody>
        @foreach($query2 as $req)
        <tr>
            <td>{{ $req->PEM_ID }}</td>
            <td>{{ $req->PEM_NAMA }}</td>
            <td>{{ $req->PEM_TGL_LAHIR }}</td>
            <td>{{ $req->PEM_ALAMAT }}</td>
            <td>{{ $req->PEM_NOTELP }}</td>
            <td>{{ $req->tgl_perubahan }}</td>
            <td>{{ $req->statusnya }}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
        @endif
@endsection
