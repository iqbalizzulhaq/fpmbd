@extends('layouts.pembelian')

@section('content')

<div class="section-title text-center center">
      <h2>bussiness card</h2>
      <hr>
      e-print menghadirkan solusi cetak online kartu nama dengan kualitas terbaik dan harga yang ekonomis
    </div>

<div class="section-title text-center center">
      <h2>Kategori Bahan</h2>
      <hr>
      Tersedia 3 kategori bahan-bahan kertas sesuai preferensi Anda
</div>
<div class="box">
  <img src="image/portfolio/bc1.jpeg" alt="" class="box-img">
  <h1>Standard Paper</h1>
    Ekonomis
    Tekstur sedikit mengkilap
    Tanpa Laminating

</div>
<div class="box">
  <img src="image/portfolio/bc2.jpeg" alt="" class="box-img">
  <h1>Premium Paper</h1>
    Elegan,
    Tekstur halus,
    Cocok untuk print penuh warna
    
  
</div>
<div class="box">
  <img src="image/portfolio/bc3.jpeg" alt="" class="box-img">
  <h1> Lux Paper</h1>
    Eksklusif,
    Tekstur licin & berlapis ( coated),
    Warna putih kekuning-kuningan,
    Berkualitas dan tahan lama
  
</div>
<div class="box">
  <img src="image/portfolio/bc4.jpeg" alt="" class="box-img">
  <h1>Other Papers</h1>
    Acquerello 250 gr,
    BW 250 gr,
    Ivory 250 gr,
    Laminating Glossy,
    Laminating Doff, dan lain lain
  
</div>


<div class="section-title text-center center">
      <h2>Daftar Harga</h2>
      <hr>
      e-print menghadirkan solusi cetak online kartu nama dengan kualitas terbaik dan harga yang ekonomis
    </div>
<div class="col-md-12">
<table class="table table-bordered table-hover table-light table-striped">
    <tr>
        <td>quantity</td>
        <td>standart</td>
        <td>premium</td>
        <td>lux</td>
    </tr>
    <tr>
        <td>1 box</td>
        <td>3000</td>
        <td>4000</td>
        <td>5000</td>
    </tr>
    <tr>
        <td>5 box</td>
        <td>12000</td>
        <td>17000</td>
        <td>23000</td>
    </tr>
    <tr>
        <td>11 box</td>
        <td>24000</td>
        <td>34000</td>
        <td>46000</td>
        <tr>
        <td>21 box</td>
        <td>48000</td>
        <td>68000</td>
        <td>90000</td>
    </tr>
    </tr>
</table>
</div>
<br>

<a href="form_pembelian" class="btn btn-default btn-lg page-scroll">Buat sekarang</a> 
@endsection