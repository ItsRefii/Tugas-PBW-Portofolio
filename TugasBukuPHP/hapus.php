<?php

include 'koneksi.php';

$id=$_GET['id'];
mysqli_query($conn, "DELETE FROM buku WHERE ID='$id'");
header("Location:index.php");

?>