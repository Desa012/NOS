<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Web Server PHP Sederhana - Tugas NOS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 2rem;
            max-width: 700px;
            margin: auto;
        }
        header { text-align: center; margin-bottom: 2rem; }
        h1 { color: #0a7; }
        .box {
            background: #f1f1f1;
            padding: 1rem;
            border-radius: 10px;
        }
        .php-output {
            background: #eaffea;
            padding: 10px;
            border: 1px solid #a7e2a7;
            border-radius: 5px;
            margin-top: 1rem;
        }
    </style>
</head>
<body>
<header>
    <h1>Web Server PHP Sederhana</h1>
    <p>Tugas Network Operating System — Universitas Udayana</p>
</header>

<div class="box">
    <h2>Halaman PHP</h2>
    <p>Halaman ini diproses menggunakan PHP, bukan HTML statis.</p>

    <div class="php-output">
        <?php
            echo "Waktu server saat ini: " . date("d-m-Y H:i:s");
        ?>
    </div>
</div>

<footer style="margin-top:2rem; text-align:center; color:#666;">
    <small>Dibuat oleh: [Nama Anda] — [NIM]</small>
</footer>
</body>
</html>
