@extends('layouts.pembelian')

@section('content')

<div class="section-title text-center center">
      <h2>Your Trolly</h2>
      <hr>
</div>
<center><a href="index" class="btn btn-success">Insert New Item</a> </center><br>

<table class="table table-bordered table-hover table-light table-striped">
    <thead>
        <th>no</th>
        <th>nama barang</th>
        <th>jumlah barang</th>
        <th>tipe bahan</th>
        <th>total pembelian</th>
        <th>Nomor Telephon</th>
        <th>Alamat</th>
        <th>aksi</th>
    </thead>
    <tbody>
        @php
            $id=1;
        @endphp

        @foreach($trollies as $trolly)
        <tr>
            <td>{{ $id++ }}</td>
            <td>{{ $trolly->nama_barang }}</td>
            <td>{{ $trolly->jumlah_barang }}</td>
            <td>{{ $trolly->tipe_bahan }}</td>
            <td>{{ $trolly->total }}</td>
            <td>{{ $trolly->phone }}</td>
            <td>{{ $trolly->address }}</td>
            <td>
                <a href="{{route('edit.trolly',$trolly->id)}}" class="btn btn-primary">Edit</a>
                <a href="{{route('delete.trolly',$trolly->id)}}" class="btn btn-danger">delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection