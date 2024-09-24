<?php
// Poin pemain
$points = 520; // Contoh poin, bisa berupa nilai apa saja

// Menampilkan skor total pemain
echo "Skor total pemain adalah: $points <br>";

// Periksa apakah pemain mendapatkan hadiah tambahan
if ($points > 500) {
    echo "Apakah pemain mendapatkan hadiah tambahan? YA";
} else {
    echo "Apakah pemain mendapatkan hadiah tambahan? TIDAK";
}
?>