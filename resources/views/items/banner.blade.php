@extends('layouts.pembelian')

@section('content')

<div class="section-title text-center center">
      <h2>Banner</h2>
      <hr>
      Media Promosi dengan print digital bermutu tinggi dari E-print untuk kebutuhan branding usaha Anda
      <br>
      <br>
      <h2>jenis banner</h2>
      <hr>
      Tersedia 2 pilihan jenis Banner

</div>

<style type="text/css">
.box{
  width: 40%;
  background: rgba(0, 0, 0, 0.4);
  padding: 40px;
  text-align: center;
  margin: 20px;
  margin-top: 1%;
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




<div class="box">
  <img src="image/portfolio/banner1.png" alt="" class="box-img">
  <h1>roll banner</h1>
  <ul>60 x 160 cm / 80 x 200 cm </ul>
  <ul>harga mulai dari Rp. 213.000</ul>
  
  
</div>

<div class="box">
  <img src="image/portfolio/banner2.png" alt="" class="box-img">
  <h1>x banner</h1>
  <ul>60 x 160 cm </ul>
  <ul>harga mulai dari Rp. 96.000</ul>
  
  
</div>

<a href="#portfolio" class="btn btn-default btn-lg page-scroll">Buat sekarang</a> </div>

<div class="section-title text-center center">
      <h2>Daftar harga</h2>
      <hr>
</div>

<table class="table table-bordered table-hover table-light table-striped">
    <tr>
        <td>bahan</td>
        <td>roll banner 60 x 160 cm</td>
        <td>roll banner 80 x 200 cm</td>
        <td>x banner</td>
    </tr>
    <tr>
        <td>flexy chine</td>
        <td>213.000</td>
        <td>314.600</td>
        <td>96.000</td>
    </tr>
    <tr>
        <td>flexy korea</td>
        <td>255.000</td>
        <td>343.200</td>
        <td>105.000</td>
    </tr>
    <tr>
        <td>flexy germany</td>
        <td>275.000</td>
        <td>317.000</td>
        <td>150.000</td>
        <tr>
        <td>albartos</td>
        <td>213.000</td>
        <td>338.000</td>
        <td>105.000</td>
    </tr>
    </tr>
</table>

@endsection