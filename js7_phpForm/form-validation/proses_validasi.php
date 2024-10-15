<!-- <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data nama dan email dari formulir
    $nama = $_POST["nama"];
    $email = $_POST["email"];

    // Inisialisasi array untuk menyimpan pesan error
    $errors = array();

    // Validasi Nama
    if (empty($nama)) {
        $errors[] = "Nama harus diisi.";
    }

    // Validasi Email
    if (empty($email)) {
        $errors[] = "Email harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }

    // Jika ada kesalahan validasi
    if (!empty($errors)) {
        // Tampilkan semua pesan error
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
        // Jika tidak ada error, lanjutkan proses (misalnya, simpan data ke database)
        echo "Data berhasil dikirim: Nama = $nama, Email = $email";
    }
}
?> -->


<!-- <?php
// Handle the AJAX request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['nama'];
    $email = $_POST['email'];

    $errors = [];

    // Your validation logic here
    if (empty($name)) {
        $errors[] = "Nama harus diisi.";
    }

    // ... other validation rules

    if (!empty($errors)) {
        $response = ['message' => '<ul>' . implode('<li>', $errors) . '</ul>'];
    } else {
        $response = ['message' => 'Data berhasil dikirim!'];
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}
?> -->

<?php
// Handle the AJAX request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $errors = [];

    // Validasi kata sandi di sisi server (tambahkan validasi lainnya sesuai kebutuhan)
    if (strlen($password) < 8) {
        $errors[] = "Password harus minimal 8 karakter.";
    }

    // ... other validation rules

    if (!empty($errors)) {
        $response = ['message' => '<ul>' . implode('<li>', $errors) . '</ul>'];
    } else {
        $response = ['message' => 'Data berhasil dikirim!'];
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}