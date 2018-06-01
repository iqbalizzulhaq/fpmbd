
@extends('layouts.mbd')

@section('content')
<div class="section-title text-center center">
      <h2>Table hasil Cursor</h2>
      <hr>
    </div>

    @if(isset($query5))

    <table class="table table-bordered table-hover table-light table-striped">
    <thead>
        <tr>
            <td>PEM_NAMA</td>
            <td>B_JENIS</td>
        </tr>
    </thead>
    <tbody>
        @foreach($query5 as $req)
        <tr>
            <td>{{ $req->P.PEM_NAMA }}</td>
            <td>{{ $req->B_JENIS }}</td>
            
        </tr>
        @endforeach
        @endif
        </tbody>
        </table>
        @endsection

