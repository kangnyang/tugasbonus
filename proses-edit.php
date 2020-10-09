<?php
include("config.php");

if(isset($_POST['masuk'])){
    $id=$_POST['id'];
    $nama=$_POST['nama_produk'];
    $keterangan=$_POST['keterangan'];
    $harga=$_POST['harga'];
    $jumlah=$_POST['jumlah'];

    $sql = "UPDATE produk SET nama_produk='$nama',keterangan='$keterangan',harga='$harga',jumlah='$jumlah' WHERE id=$id ";
    $query =mysqli_query($db, $sql);

    if($query){
        header('location: daftar-produk.php');
    }else{
        die("gagal menyimpan perubahan..");
    }
}else{
    die("akses dilarang...");
}

?>