@extends('layouts.mbd')

@section('content')

<div class="section-title text-center center">
      <h2>Page Function</h2>
      <hr>
    </div>

<form action="{{ route('jml_pemesan') }}" method="POST" class="col-md-8">
	{{ csrf_field() }}
	<input type="text" name="jml_pemesan" placeholder="Masukkan ID Pegawai" class="col-md-8">
	<button type="submit">submit</button>
</form>
<br><br>
@if(isset ($query))
<table class="table table-bordered table-hover table-light table-striped class="col-md-6">
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