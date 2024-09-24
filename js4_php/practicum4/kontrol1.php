<?php
$grades = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// Urutkan nilai dalam urutan menaik
sort($grades);

// Hapus dua nilai tertinggi dan dua nilai terendah
$filteredGrades = array_slice($grades, 2, -2);

// Hitung total nilai yang tersisa
$totalScore = array_sum($filteredGrades);

// Menampilkan skor total
echo "Nilai total setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: $totalScore";
?>