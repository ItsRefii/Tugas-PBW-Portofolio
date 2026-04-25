<?php

include 'koneksi.php';

$judul=$_POST['judul'];
$penulis=$_POST['penulis'];
$tahun=$_POST['tahun'];
$harga=$_POST['harga'];
$stok=$_POST['stok'];

$sql="INSERT INTO buku
(Judul,Penulis,Tahun_Terbit,Harga,Stok)
VALUES
('$judul','$penulis','$tahun','$harga','$stok')";

mysqli_query($conn,$sql);

header("Location:index.php");

?>