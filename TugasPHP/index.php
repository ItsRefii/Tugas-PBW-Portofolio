<?php

define("PAJAK", 0.10);

$barang = [
    "Keyboard" => 150000,
    "Mouse" => 50000,
    "Monitor" => 2000000
];

$namaBarang = "Keyboard";
$harga = $barang[$namaBarang];

$jumlahBeli = 2;

$total = $harga * $jumlahBeli;
$pajak = $total * PAJAK;
$totalBayar = $total + $pajak;

echo "<h2>Perhitungan Total Pembelian</h2>";
echo "Nama Barang: $namaBarang <br>";
echo "Harga Satuan: Rp $harga <br>";
echo "Jumlah Beli: $jumlahBeli <br>";
echo "Total Harga (Sebelum Pajak): Rp $total <br>";
echo "Pajak (10%): Rp $pajak <br><br>";
echo "<b>Total Bayar: Rp $totalBayar</b>";

?>