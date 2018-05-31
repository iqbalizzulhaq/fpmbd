@extends('layouts.pembelian')

@section('content')
Membuat fungsi untuk menghitung jumlah pendapatan pada tanggal tertentu <br>
<h5>masukkan tanggal</h5>
<form action="{{ route('tanggal') }}" method="POST">
	{{ csrf_field() }}
	<input type="date" name="tanggal" class="col-md-8">
	<button type="submit">submit</button>
</form>
<br><br>
@if(isset ($query))
<table class="table table-bordered table-hover table-light table-striped">
		<thead>
			<th>total pendapatan</th>
		</thead>
		<tbody>
			
				<tr>
					<td>{{$query}}</td>
				</tr>
			
		</tbody>
	</table>
	@endif
@endsection