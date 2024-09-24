<?php
// Harga produk
$productPrice = 120000;
$discount = 0;

// Periksa apakah harga produk memenuhi syarat untuk mendapatkan diskon
if ($productPrice > 100000) {
    $discount = 0.20 * $productPrice;
}

// Hitung harga akhir setelah menerapkan diskon
$finalPrice = $productPrice - $discount;

// Menampilkan harga akhir
echo "Harga yang harus dibayar setelah diskon: Rp $finalPrice";
?>