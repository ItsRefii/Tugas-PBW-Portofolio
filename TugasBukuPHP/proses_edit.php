<?php

include 'koneksi.php';

$id=$_POST['id'];
$judul=$_POST['judul'];
$penulis=$_POST['penulis'];
$tahun=$_POST['tahun'];
$harga=$_POST['harga'];
$stok=$_POST['stok'];

$sql="UPDATE buku SET

Judul='$judul',
Penulis='$penulis',
Tahun_Terbit='$tahun',
Harga='$harga',
Stok='$stok'

WHERE ID='$id'";

mysqli_query($conn,$sql);

header("Location:index.php");

?>