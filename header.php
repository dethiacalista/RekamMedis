<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #004c4c;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background-color: #004c4c;
            text-align: center;
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            display: inline-block;
            padding: 14px 20px;
            text-decoration: none;
            color: #fff;
            transition: background-color 0.3s ease;
        }

        nav ul li a:hover {
            background-color: #006666;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Beranda</a></li>
            <li><a href="inputregistrasipasien.php">Input Data Pasien</a></li>
            <li><a href="inputpengecekandokter.php">Input Pemeriksaan Dokter</a></li>
            <li><a href="inputpengambilanobat.php">Input Pengambilan Obat</a></li>
            <li><a href="lihattransaksipengambilanobat.php">Lihat Transaksi Pengambilan Obat</a></li>
            <li><a href="join-table.php">Lihat Rekam Medis</a></li>
        </ul>
    </nav>
</body>
</html>
