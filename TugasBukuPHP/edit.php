<?php
include 'koneksi.php';

$id=$_GET['id'];

$data=mysqli_query($conn,
"SELECT * FROM buku WHERE ID='$id'");

$d=mysqli_fetch_assoc($data);

?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Buku</title>

        <style>

            body{
            font-family:Arial;
            margin:40px;
            }

            form{
            width:400px;
            margin:auto;
            }

            input{
            width:100%;
            padding:10px;
            margin:8px 0;
            }

            button{
            padding:10px 20px;
            }

        </style>

    </head>
    <body>

        <h2 align="center">
        Edit Buku
        </h2>

            <form action="proses_edit.php" method="POST">

            <input type="hidden"
            name="id"
            value="<?php echo $d['ID']; ?>">

            Judul
            <input type="text"
            name="judul"
            value="<?php echo $d['Judul']; ?>">

            Penulis
            <input type="text"
            name="penulis"
            value="<?php echo $d['Penulis']; ?>">

            Tahun
            <input type="number"
            name="tahun"
            value="<?php echo $d['Tahun_Terbit']; ?>">

            Harga
            <input type="number"
            step="0.01"
            name="harga"
            value="<?php echo $d['Harga']; ?>">

            Stok
            <input type="number"
            name="stok"
            value="<?php echo $d['Stok']; ?>">

            <button type="submit">
            Update
            </button>

        <a href="index.php">
        Kembali
        </a>

    </form>

    </body>
</html>