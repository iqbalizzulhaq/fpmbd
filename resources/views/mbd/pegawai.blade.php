@extends('layouts.pembelian')

@section('content')
<center>
	<div class="col-md-6">
		<form action="#" method="post">
        <input type="submit" value="Tambah Pegawai" class="btn btn-primary" ><br><br>
			<!-- @csrf -->
			<input type="text" name="PEG_ID" class="form-control" placeholder="ID Pegawai">
			<input type="text" name="PEG_NAMA" class="form-control" placeholder="nama Pegawai">
			<input type="date" name="PEG_TGL_LAHIR" class="form-control" placeholder="jumlah barang">
            <input type="text" name="PEG_ALAMAT" class="form-control" placeholder="Alamat Pegawai">
            <input type="text" name="PEG_NOTELP" class="form-control" placeholder="No Tlp Pegawai">
            <input type="text" name="BAGIAN" class="form-control" placeholder="Jabatan">
            
			
		</form>
	</div>
	</center>
@endsection