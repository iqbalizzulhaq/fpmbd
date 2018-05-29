<!DOCTYPE html>
<html lang="en" >

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<head>
  <meta charset="UTF-8">
  <title>form pembelian</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="css/form_style.css">

    <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="image/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="image/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="image/apple-touch-icon-114x114.png">

      

  
</head>

<body>

  <!-- multistep form -->
<form action="{{route('store.trolly')}}" method="post" id="msform">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Item Setup</li>
	  <li>Personal Details</li>
    <li>Payment</li>
    <li>Your trolly</li> 
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Data item pembelian</h2>
    <h3 class="fs-subtitle">This is step 1</h3>
    <input type="text" name="nama_barang" placeholder="Nama Barang" />
    <input type="text" name="jumlah_barang" placeholder="jumlah barang" />
    <input type="text" name="type_bahan" placeholder="Type Kertas" /><br>
	<h5>Pilih Desain </h5><br>
	<input type="file" name="desain" placeholder="Desain (optional)" />
	
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  
  <fieldset>
    <h2 class="fs-title">Personal Details</h2>
    <h3 class="fs-subtitle">Isi data diri anda</h3>
    <input type="text" name="fname" placeholder="First Name" />
    <input type="text" name="lname" placeholder="Last Name" />
    <input type="text" name="phone" placeholder="Phone" />
    <textarea name="address" placeholder="Address"></textarea>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
	<input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>

  <fieldset>
    <h2 class="fs-title">Pembayaran</h2>
    <h3 class="fs-subtitle">lakukan pembayaran</h3>
	<select class="select" name="bank">
		<option>pilih jenis pembayaran</option>
		<option value="BNI">BNI</option>
		<option value="BRI">BRI</option>
		<option value="MANDIRI">MANDIRI</option>
		<option value="DANAMON">DANAMON</option>
		<option value="BUKOPIN">BUKOPIN</option>
		<option value="BTN">BTN</option>
	</select>
  
    <input type="text" name="no_rekening" placeholder="Nomor Rekening Anda" />
    <input type="text" name="nama" placeholder="Atas Nama" />
    <input type="text" name="total" placeholder="Total Pembayaran"/>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    

    
    <a href="trolly" class="btn btn-default">Submit</a>
    
    
  </fieldset>

  
</form>
  
  
  

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script  src="js/formjs.js"></script>





</body>

</html>
