<?php

include("config.php");

if(!isset ($_GET['id'])){
    header('location: daftar-produk.php');
}

$id=$_GET['id'];

$sql="SELECT * FROM produk WHERE id=$id";
$query=mysqli_query($db, $sql);
$produk=mysqli_fetch_assoc($query);

if(mysqli_num_rows($query)<1){
    die(" data tidak di temukan....");
}
?>
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
<h1> FORM EDIT PRODUK</h1>
<form action="proses-edit.php" method="POST">
<input type="hidden" name="id" value="<?php echo $produk['id'] ?>"/>
  <div class="form-group col-md-6">
    <label for="nama_produk">Nama Produk</label>
    <input type="text" class="form-control" name="nama_produk" placeholder="contoh : mouse" value="<?php echo $produk['nama_produk'] ?>"/>
  
  </div>
  <div class="form-group col-md-6">
    <label for="keterangan">Keterangan</label>
    <input type="text" class="form-control" name="keterangan" placeholder="contoh : robot" value="<?php echo $produk['keterangan'] ?>"/>
  </div>
  <div class="form-group col-md-6">
    <label for="harga">Harga</label>
    <input type="number" class="form-control" name="harga" placeholder="Rp." value="<?php echo $produk['harga'] ?>"/>
  </div>
  <div class="form-group col-md-6">
    <label for="jumlah">Jumlah</label>
    <input type="number" class="form-control" name="jumlah" placeholder="Rp." value="<?php echo $produk['jumlah'] ?>"/>
  </div>
  <input class="btn btn-primary" type="submit" value="Submit" name="masuk">
<input class="btn btn-primary" type="reset" value="Reset" name="ubah">
  
  
</form>

</div>




</body>
</html>