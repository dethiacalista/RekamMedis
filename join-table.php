<?php 
include 'header.php'; 
include 'db_connect.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lihat Rekam Medis</title>
    <style>
        /* CSS styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        h1 {
            text-align: center;
            color: #135D66;
            margin-top: 20px;
        }

        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #176B87;
            color: #fff;
        }

        tr:nth-child(odd) {
            background-color: #E3FEF7;
        }
    </style>
</head> 
<body>
    <h1>Lihat Rekam Medis</h1>
    <table>
        <tr>
            <th>Record Number</th>
            <th>Nama Pasien</th>
            <th>Kode Pasien</th>
            <th>Nama Dokter</th>
            <th>Waktu Pemeriksaan</th>
            <th>Keluhan</th>
            <th>Tindakan</th>
            <th>Diagnosis</th>
            <th>Status</th>
            <th>Riwayat Penyakit</th>
            <th>Poli Tujuan</th>
        </tr>
        <?php
        $sql = "
        SELECT r.record_number, r.namaPasien, p.kode_pasien, r.nama_dokter, r.waktuPemeriksaan, r.keluhan, r.tindakan, r.diagnosis, r.status, r.riwayatPenyakit, pd.namapoli AS poliTujuan
        FROM rekammedis r
        JOIN pasien p ON r.namaPasien = p.namaPasien
        JOIN transaksipengambilanobat t ON r.record_number = t.record_number
        JOIN poli pd ON r.poliTujuan = pd.kodepoli
        ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>{$row['record_number']}</td>";
                echo "<td>{$row['namaPasien']}</td>";
                echo "<td>{$row['kode_pasien']}</td>";
                echo "<td>{$row['nama_dokter']}</td>";
                echo "<td>{$row['waktuPemeriksaan']}</td>";
                echo "<td>{$row['keluhan']}</td>";
                echo "<td>{$row['tindakan']}</td>";
                echo "<td>{$row['diagnosis']}</td>";
                echo "<td>{$row['status']}</td>";
                echo "<td>{$row['riwayatPenyakit']}</td>";
                echo "<td>{$row['poliTujuan']}</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='11' class='centered-text'>Tidak ada data rekam medis yang ditemukan</td></tr>";
        }
        ?>
    </table>
</body>
</html>