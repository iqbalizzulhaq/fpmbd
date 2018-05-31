
    @if(isset($query2))
    <table style="1px solid">
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
