<?php 
include ("config.php");

if(isset($_POST['masuk'])){
$nama = $_POST['nama_produk'];
$keterangan = $_POST['keterangan'];
$harga=$_POST['harga'];
$jumlah=$_POST['jumlah'];

//query
$sql="INSERT INTO produk (nama_produk,keterangan,harga,jumlah) value ('$nama','$keterangan','$harga', '$jumlah')";
$query=mysqli_query($db, $sql);

//mengeck berhasil atau tidak
if($query){
    header('location: index.php?status=sukses');
}else{
    header('location: index.php?status=gagal');
}

}else{
    die("Akses dilarang...");
}
?>