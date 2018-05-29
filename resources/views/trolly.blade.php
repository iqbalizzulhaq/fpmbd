@extends('layouts.pembelian')

@section('content')

<div class="section-title text-center center">
      <h2>Your Trolly</h2>
      <hr>
</div>
<center><a href="admin" class="btn btn-success">Insert New Item</a> </center><br>

<table class="table table-bordered table-hover table-light table-striped">
    <thead>
        <th>nama barang</th>
        <th>jumlah barang</th>
        <th>tipe bahan</th>
        <th>total pembelian</th>
        <th>Nomor Telephon</th>
        <th>Alamat</th>
    </thead>
    <tbody>
        
    </tbody>
</table>
@endsection