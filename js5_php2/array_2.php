<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 2</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        .info {
            background: #fff;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="info">
        <h1>Data Dosen</h1>
        <?php
            $Dosen = [
                'nama'=> 'Elok Nur Hamdana',
                'domisili'=> 'Malang',
                'jenis_kelamin'=> 'Perempuan'
            ];

            echo "Nama: {$Dosen['nama']} <br>";
            echo "Domisili: {$Dosen['domisili']} <br>";
            echo "Jenis Kelamin: {$Dosen['jenis_kelamin']} <br>";
        ?>
    </div>
</body>
</html>
