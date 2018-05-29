@extends('layouts.pembelian')

@section('content')

<style type="text/css">
.box{
  width: 25%;
  background: rgba(0, 0, 0, 0.4);
  padding: 40px;
  text-align: center;
  margin: 20px;
  margin-top: 5%;
  color: white;
  float: left;
  font-family: 'Century Gothic',sans-serif;
}
.box-img{
  border-radius: 100%;
  width: 200px;
  height: 200px;
  float: center;
}
.box h1{
  font-size: 40px;
  letter-spacing: 4px;
  font-weight: 100;
}
.box h5{
  font-size: 20px;
  letter-spacing: 3px;
  font-weight: 100;
}
.box p{
  text-align: justify;
}


</style>

<div class="section-title text-center center">
      <h2>Stiker</h2>
      <hr>
      Semakin rapi dan produktif dengan label & stiker Prinzio dalam berbagai ukuran, bentuk, dan fungsi.
</div>

<div class="box">
  <img src="image/portfolio/stiker1.jpeg" alt="" class="box-img">
  <h1>circle</h1>
  
</div>

<div class="box">
  <img src="image/portfolio/stiker2.jpeg" alt="" class="box-img">
  <h1>Regtangle</h1>
  
</div>

<div class="box">
  <img src="image/portfolio/stiker3.jpeg" alt="" class="box-img">
  <h1>Square</h1>
</div>
<a href="#portfolio" class="btn btn-default btn-lg page-scroll">Buat sekarang</a>

<div class="section-title text-center center">
      <h2>Daftar Harga</h2>
      <hr>
      E-print menghadirkan solusi cetak online sticker dengan kualitas terbaik dan harga yang ekonomis
</div>

<table class="table table-bordered table-hover table-light table-striped">
    <tr>
        <td>quantity</td>
        <td>Circle</td>
        <td>Regtangle</td>
        <td>Square</td>
    </tr>
    <tr>
        <td>50 pcs</td>
        <td>Rp. 1.694 /pcs</td>
        <td>Rp. 429 /pcs</td>
        <td>Rp. 154 /pcs0</td>
    </tr>
    <tr>
        <td>100 pcs</td>
        <td>Rp. 924 /pcs</td>
        <td>Rp. 286 /pcs</td>
        <td>Rp. 149 /pcs</td>
    </tr>
    <tr>
        <td>200 pcs</td>
        <td>Rp. 462 /pcs</td>
        <td>Rp. 238 /pcs</td>
        <td>Rp. 143 /pcs</td>
        <tr>
        <td>500 pcs</td>
        <td>Rp. 429 /pcs</td>
        <td>Rp. 229 /pcs</td>
        <td>Rp. 141 /pcs</td>
    </tr>
    </tr>
</table>
<br>
<i>* Tabel harga sticker bahan chromo</i>


@endsection