<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>inventory arkademy</title>
    <style>
    
    .container {
        margin-left :25%;
        margin-top : 10%;
    }.welcome{
        font-size: 28px;
        margin-left: 13%;
    }
    .card {
        text-align:center;
    }
    </style>
  </head>
  <body>
    
   <div class="container">
   <h1 class="welcome">SELAMAT DATANG KEMBALI</h1>
  <div class="card" style="width: 40rem;">
  <div class="card-body">
    <h5 class="card-title">INVENTORY BARANG ARKDADEMY</h5>
    
    <p class="card-text">Silahkan pilih tindakan yang di inginkan</p>
    <a href="form-masukan.php" class="card-link">Tambah Produk</a>
    <a href="daftar-produk.php" class="card-link">Lihat Daftar Produk</a>
    
    <?php if(isset($_GET['status'])): ?>
    <p>
    <?php 
    if($_GET['status']=='sukses'){
        echo " Produk berhasil di masukan";
    }else{
        echo " Produk gagal di masukan";
    }
    ?>
    </p>
<?php endif; ?>
  </div>
</div>
</div> 





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>