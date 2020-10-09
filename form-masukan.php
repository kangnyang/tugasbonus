<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Form Input Produk</title>
    <style>
  form {
      font-size : 18px;
  }
  .container {
     border :1px solid black;
     padding-bottom:10px;
  }
    </style>
</head>
<body>



<div class="container">
<h1> FORM INPUT PRODUK</h1>
<form action="proses-masukan.php" method="POST">
  <div class="form-group col-md-6">
    <label for="nama_produk">Nama Produk</label>
    <input type="text" class="form-control" name="nama_produk" placeholder="contoh : mouse">
  
  </div>
  <div class="form-group col-md-6">
    <label for="keterangan">Keterangan</label>
    <input type="text" class="form-control" name="keterangan" placeholder="contoh : robot">
  </div>
  <div class="form-group col-md-6">
    <label for="harga">Harga</label>
    <input type="number" class="form-control" name="harga" placeholder="Rp.">
  </div>
  <div class="form-group col-md-6">
    <label for="jumlah">Jumlah</label>
    <input type="number" class="form-control" name="jumlah" placeholder="Rp.">
  </div>
  <input class="btn btn-primary" type="submit" value="Submit" name="masuk">
<input class="btn btn-primary" type="reset" value="Reset" name="ubah">
  
  
</form>

</div>




</body>
</html>
