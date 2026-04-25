<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Data Buku</title>

    <style>

        body{
        font-family:Arial;
        margin:40px;
        }

        h2{
        text-align:center;
        }

        table{
        width:90%;
        margin:auto;
        border-collapse:collapse;
        }

        th,td{
        border:1px solid black;
        padding:10px;
        text-align:center;
        }

        a{
        text-decoration:none;
        background:blue;
        color:white;
        padding:8px 12px;
        border-radius:5px;
        }

        .tambah{
        display:block;
        width:150px;
        margin:20px auto;
        text-align:center;
        }

    </style>

</head>
    <body>

    <h2>Data Buku</h2>

    <a class="tambah" href="tambah.php">
    Tambah Buku
    </a>

            <table>
            <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
            </tr>

                <?php

                $no=1;

                $data=mysqli_query($conn,"SELECT * FROM buku");

                while($d=mysqli_fetch_assoc($data)){

                ?>

                <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['Judul']; ?></td>
                <td><?php echo $d['Penulis']; ?></td>
                <td><?php echo $d['Tahun_Terbit']; ?></td>
                <td><?php echo $d['Harga']; ?></td>
                <td><?php echo $d['Stok']; ?></td>
                <td>

        <a href="edit.php?id=<?php echo $d['ID']; ?>">
        Edit
        </a>

        <a href="hapus.php?id=<?php echo $d['ID']; ?>"
        onclick="return confirm('Hapus data?')">
        Hapus
        </a>

        </td>

    </tr>

    <?php } ?>

    </table>

    </body>
</html>