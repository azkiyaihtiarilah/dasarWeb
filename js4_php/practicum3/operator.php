<?php 
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;

// $hasilTambah = $a + $b;
// $hasilKurang = $a - $b;
// $hasilKali = $a * $b;
// $hasilBagi = $a / $b;
// $sisaBagi = $a % $b;
// $pangkat = $a ** $b;

// // Display arithmetic results
// echo "Variabel Hasil Tambah: {$hasilTambah} <br>";
// echo "Variabel Hasil Kurang: {$hasilKurang} <br>";
// echo "Variabel Hasil Kali: {$hasilKali} <br>";
// echo "Variabel Hasil Bagi: {$hasilBagi} <br>";
// echo "Variabel Sisa Bagi: {$sisaBagi} <br>";
// echo "Variabel Pangkat: {$pangkat} <br>";

// // Comparison operations
// $hasilSama = $a == $b;
// $hasilTidakSama = $a != $b;
// $hasilLebihKecil = $a < $b;
// $hasilLebihBesar = $a > $b;
// $hasilLebihKecilSama = $a <= $b;
// $hasilLebihBesarSama = $a >= $b;

// // Display comparison results
// echo "Hasil Sama: " . ($hasilSama ? 'true' : 'false') . "<br>";
// echo "Hasil Tidak Sama: " . ($hasilTidakSama ? 'true' : 'false') . "<br>";
// echo "Hasil Lebih Kecil: " . ($hasilLebihKecil ? 'true' : 'false') . "<br>";
// echo "Hasil Lebih Besar: " . ($hasilLebihBesar ? 'true' : 'false') . "<br>";
// echo "Hasil Lebih Kecil Sama: " . ($hasilLebihKecilSama ? 'true' : 'false') . "<br>";
// echo "Hasil Lebih Besar Sama: " . ($hasilLebihBesarSama ? 'true' : 'false') . "<br>";

// // Logical operations
// $hasilAnd = $a && $b;
// $hasilOr = $a || $b;
// $hasilNotA = !$a;
// $hasilNotB = !$b;

// // Display logical results
// echo "Hasil AND: " . ($hasilAnd ? 'true' : 'false') . "<br>";
// echo "Hasil OR: " . ($hasilOr ? 'true' : 'false') . "<br>";
// echo "Hasil NOT A: " . ($hasilNotA ? 'true' : 'false') . "<br>";
// echo "Hasil NOT B: " . ($hasilNotB ? 'true' : 'false') . "<br>";

// // Arithmetic with assignment operators
// $a += $b;
// echo "Setelah A += B: $a <br>";
// $a -= $b;
// echo "Setelah A -= B: $a <br>";
// $a *= $b;
// echo "Setelah A *= B: $a <br>";
// $a /= $b;
// echo "Setelah A /= B: $a <br>";
// $a %= $b;
// echo "Setelah A %= B: $a <br>";

// Identity operations
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

// Display identity results
echo "Hasil Identik: " . ($hasilIdentik ? 'true' : 'false') . "<br>";
echo "Hasil Tidak Identik: " . ($hasilTidakIdentik ? 'true' : 'false') . "<br>";
?>