
@extends('layouts.mbd')

@section('content')
<div class="section-title text-center center">
      <h2>Table hasil Procedure Pengiriman</h2>
      <hr>
    </div>

    @if(isset($query4))

    <table class="table table-bordered table-hover table-light table-striped">
    <thead>
        <tr>
            <td>T_ID</td>
            <td>PENG_ID</td>
            <td>PENG_STATUS</td>
            <td>PENG_ALAMAT</td>
            
        </tr>
    </thead>
    <tbody>
        @foreach($query4 as $req)
        <tr>
            <td>{{ $req->T_ID }}</td>
            <td>{{ $req->PENG_ID }}</td>
            <td>{{ $req->PENG_STATUS }}</td>
            <td>{{ $req->PENG_ALAMAT }}</td>
            
        </tr>
        @endforeach
        @endif
        </tbody>
        </table>
        @endsection

