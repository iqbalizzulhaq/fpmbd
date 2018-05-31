@extends('layouts.pembelian')

@section('content')
-- 2.Membuat fungsi untuk menghitung jumlah pendapatan pada tanggal tertentu 
<form action="{{ route('tanggal') }}" method="POST">
	{{ csrf_field() }}
	<input type="date" name="tanggal">
	<button type="submit">submit</button>
</form>
@if(isset ($query))
	<table>
		<thead>
			<th>tanggal</th>
		</thead>
		<tbody>
			
				<tr>
					<td>{{$query}}</td>
				</tr>
			
		</tbody>
	</table>
	@endif
@endsection