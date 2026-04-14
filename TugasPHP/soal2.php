<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            max-width: 350px;
            margin: 0 auto;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        label {
            display: block;
            margin-top: 10px;
            color: #555;
        }

        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            width: 100%;
            margin-top: 15px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .hasil {
            max-width: 350px;
            margin: 15px auto;
            padding: 10px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            text-align: center;
            font-weight: bold;
        }

        .btn-kembali {
            display: block;
            width: fit-content;
            margin: 20px auto;
            text-decoration: none;
            background: #333;
            color: white;
            padding: 8px 15px;
            border-radius: 5px;
        }

        .btn-kembali:hover {
            background: #555;
        }
    </style>
</head>
<body>
    <h2>Bilangan Genap</h2>
    <form method="post" action="">
        <label for="awal">Angka Awal:</label>
        <input type="number" id="awal" name="awal" value="2" required>

        <label for="akhir">Angka Akhir:</label>
        <input type="number" id="akhir" name="akhir" value="10" required>

        <input type="submit" value="Tampilkan Bilangan Genap">
    </form>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $awal = $_POST['awal'];
        $akhir = $_POST['akhir'];

        for ($i = $awal; $i <= $akhir; $i += 2) {
            if ($i % 2 == 0) {
                echo $i . " ";
            }
        }
    }
    ?>
    <hr>
    <a href="index.php?page=home" class="btn-kembali">← Kembali ke Menu</a>
</body>
</html>