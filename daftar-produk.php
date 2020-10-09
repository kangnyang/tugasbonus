<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Daftar Produk</title>
    <style>
  .btn {
      margin-bottom:10px;
  }
  h1{
      font-size:28px;
      margin-top:10px;
  }
    </style>
</head>
<body>

<div class="container">
<h1> DAFTAR PRODUK / BARANG</h1>
<nav>

<a class="btn btn-primary" href="index.php" role="button">HOME</a>
<a class="btn btn-primary" href="form-masukan.php" role="button">Tambah Produk</a>
</nav>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Harga</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Tindakan</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sql = "SELECT * FROM produk";
    $query= mysqli_query($db, $sql);
    $nomor=0;
    while($produk =mysqli_fetch_array($query)){
       
        echo "<tr>";
        $nomor++;
        echo "<td>".$nomor."</td>";
        echo "<td>".$produk['nama_produk']."</td>";
        echo "<td>".$produk['keterangan']."</td>";
        echo "<td>".$produk['harga']."</td>";
        echo "<td>".$produk['jumlah']."</td>";
        echo"<td>";
        echo "<a href='form-edit.php?id=".$produk['id']."'> Edit </a> ";
        echo "<a href='hapus.php?id=".$produk['id']."'> Hapus </a> ";
        echo"</td>";
    }?>
   
  </tbody>
</table>
<p> Total : <?php echo mysqli_num_rows($query) ?> </p>
</div>




</body>
</html>
