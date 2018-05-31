<?php
	$query = DB::selectOne("SELECT DISTINCT tampil_pendapatan('2018-04-17')as tanggal FROM transaksi")->tanggal;
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<thead>
			<th>tanggal</th>
		</thead>
		<tbody>
			@foreach($query as $q)
				<tr>
					<td>{{$q}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>