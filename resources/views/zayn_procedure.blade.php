@extends('layouts.pembelian')

@section('content')
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