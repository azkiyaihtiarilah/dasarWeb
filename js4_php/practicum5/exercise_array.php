<?php
// Larik siswa dengan nama dan nilai mereka
$studentsGrades = [
    ['name' => 'Alice', 'grade' => 85],
    ['name' => 'Bob', 'grade' => 92],
    ['name' => 'Charlie', 'grade' => 78],
    ['name' => 'David', 'grade' => 64],
    ['name' => 'Eva', 'grade' => 90],
];

// Menghitung rata-rata kelas
$totalGrades = 0;
$numStudents = count($studentsGrades);

foreach ($studentsGrades as $student) {
    $totalGrades += $student['grade'];
}

$averageGrade = $totalGrades / $numStudents;

// Menampilkan siswa yang mendapat nilai di atas rata-rata kelas
echo "Nilai rata-rata kelas: $averageGrade<br>";
echo "Siswa yang mendapat nilai di atas rata-rata: <br>";

foreach ($studentsGrades as $student) {
    if ($student['grade'] > $averageGrade) {
        echo "Name: {$student['name']}, Grade: {$student['grade']}<br>";
    }
}
?>