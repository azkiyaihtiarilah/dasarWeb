<?php
// Presentase jumlah kursi restaurant
$totalKursi = 45;
$kursiDipakai = 28;

$kursiKosong = $totalKursi - $kursiDipakai;
$presentaseKursi = ($kursiKosong / $totalKursi) * 100;

echo "Total Semua Kursi kursi:  {$totalKursi} <br>";
echo "Jumlah kursi dipakai:  {$kursiDipakai} <br>";
echo "Jumlah kursi dipakai:  {$kursiKosong} <br>";
echo "Presentase kursi kosong:  {$presentaseKursi} <br>";
?>