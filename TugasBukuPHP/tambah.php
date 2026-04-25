<!DOCTYPE html>
<html>
<head>
<title>Tambah Buku</title>

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
    Tambah Buku
    </h2>

        <form action="proses_tambah.php" method="POST">

        Judul
        <input type="text" name="judul" required>
        Penulis
        <input type="text" name="penulis" required>
        Tahun Terbit
        <input type="number" name="tahun" required>
        Harga
        <input type="number" step="0.01" name="harga" required>
        Stok
        <input type="number" name="stok" required>
        <button type="submit">
        Simpan
        </button>
        <a href="index.php">
        Kembali
        </a>
        </form>

    </body>
</html>