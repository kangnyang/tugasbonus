<?php
$server = "localhost";
$user="root";
$password ="";
$nama_db = "arkademy";
$db=mysqli_connect($server,$user, $password, $nama_db);
if(!$db){
    die(" gagal terhubung dengan db". mysqli_connect_error());
}


?>
