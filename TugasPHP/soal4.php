<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganjil atau Genap</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h3 {
            color: #333;
        }
        form {
            margin-top: 20px;
        }
        input[type="number"] {
            padding: 8px;
            width: 200px;
            margin-bottom: 10px;
        }
        button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .btn-kembali {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #6c757d;
            color: white;
            text-decoration: none;
        }
        .btn-kembali:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>
    <h3>Genap / Ganjil</h3>

    <form method="POST">
        Masukkan angka: <br>
        <input type="number" name="angka" required>
        <br>
        <button type="submit">Cek</button>
    </form>

    <?php
        if (isset($_POST['angka'])) {
            $angka = $_POST['angka'];
            $hasil = ($angka % 2 == 0) ? "Genap" : "Ganjil";

            echo "<p>Angka $angka adalah <b>$hasil</b></p>";
        }
    ?>
    <hr>
    <a href="index.php?page=home" class="btn-kembali">← Kembali ke Menu</a>
</body>
</html>