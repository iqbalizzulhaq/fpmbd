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
@endsection