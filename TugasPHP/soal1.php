<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case</title>
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
        margin-bottom: 10px;
        color: #555;
    }

    input[type="number"] {
        width: 100%;
        padding: 8px;
        border-radius: 5px;
        border: 1px solid #ccc;
        margin-bottom: 15px;
    }

    input[type="submit"] {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #007BFF;
        color: white;
        font-weight: bold;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    .hasil {
        max-width: 350px;
        margin: 15px auto;
        padding: 10px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
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
    <h2>Input Roda Kendaraan</h2>

    <form method="post" action="">
    <label for="roda">Masukkan jumlah roda kendaraan:</label>
        <input type="number" id="roda" name="roda" required>
        <input type="submit" value="Proses">
    </form>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $roda = $_POST['roda'];

        switch ($roda) {
            case 2:
                $jenis = "Sepeda, Motor";
                break;
            case 3:
                $jenis = "Becak, Bajaj, Bemo";
                break;
            case 4:
                $jenis = "Mobil, Truk kecil, Bus, Van, Minibus";
                break;
            case 6:
                $jenis = "Truk, Bus besar, Traktor, Kendaraan berat, Kendaraan militer";
                break;
            default:
                $jenis = "Kendaraan tidak dikenal";
        }

        echo "<h3>Hasil:</h3>";
        echo "Jumlah Roda: " . $roda . "<br>";
        echo "Jenis Kendaraan: " . $jenis;
    }
    ?>
    <hr><a href="index.php?page=home" class="btn-kembali">← Kembali ke Menu</a>
</body>
</html>