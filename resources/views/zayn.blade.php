@extends('layouts.pembelian')

@section('content')
-- 2.Membuat fungsi untuk menghitung jumlah pendapatan pada tanggal tertentu 
<form action="{{ route('jml_pemesan') }}" method="POST">
	{{ csrf_field() }}
	<input type="text" name="jml_pemesan">
	<button type="submit">submit</button>
</form>
@if(isset ($query))
	<table>
		<thead>
			<th>jml_pemesan</th>
		</thead>
		<tbody>
			
				<tr>
					<td>{{$query}}</td>
				</tr>
			
		</tbody>
	</table>
	@endif

    @if(isset($query2))
    <table>
    <thead>
        <tr>
            <td>PEG_ID<td>
            <td>PEG_NAMA<td>
            <td>PEG_TGL_LAHIR<td>
            <td>PEG_ALAMAT<td>
            <td>PEG_NOTELP<td>
            <td>BAGIAN<td>
            <td>tgl_perubahan<td>
            <td>statusnya<td>
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
        @endif

<form action="{{ route('status') }}" method="POST">
	{{ csrf_field() }}
	<input type="text" name="status" placeholder="masukkan id transaksi">
	<button type="submit">submit</button>
</form>
@if(isset ($query3))
	<table>
		<thead>
			<th>status</th>
		</thead>
		<tbody>
			
				<tr>
					<td>{{$query3}}</td>
				</tr>
			
		</tbody>
	</table>
	@endif
        
@endsection