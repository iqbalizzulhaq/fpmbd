@extends('layouts.pemesan')

@section('content')
<center>
	<div class="col-md-6">
		<form action="{{route('store.inventory')}}" method="post">
			@csrf
			<input type="file" name="gambar" class="form-control" placeholder="gambar">
			<input type="text" name="nama_barang" class="form-control" placeholder="nama barang">
			<input type="text" name="jumlah_barang" class="form-control" placeholder="jumlah barang">
            <input type="text" name="kondisi_b" class="form-control" placeholder="jumlah kondisi bagus">
            <input type="text" name="kondisi_rr" class="form-control" placeholder="jumlah kondisi rusak ringan">
            <input type="text" name="kondisi_rb" class="form-control" placeholder="jumlah kondisi rusak berat">
            <input type="text" name="keterangan" class="form-control" placeholder="keterangan">
            <br>
			<input type="submit" value="Tambah Item" class="btn btn-primary" >
		</form>
	</div>
	</center>
@endsection