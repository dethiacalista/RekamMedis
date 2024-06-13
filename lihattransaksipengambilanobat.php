<?php 
include 'header.php'; 
include 'db_connect.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lihat Transaksi Pengambilan Obat</title>
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
            width: 80%;
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

        form {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        select {
            margin-right: 10px;
            padding: 5px;
            font-size: 14px;
        }

        input[type="submit"] {
            padding: 5px 10px;
            background-color: #135D66;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #3AA6B9;
        }
    </style>
</head>
<body>
    <h1>Lihat Transaksi Pengambilan Obat</h1>
    <table>
        <tr>
            <th>Record Number</th>
            <th>Obat</th>
            <th>Status</th>
        </tr>
        <?php
        $sql = "SELECT * FROM transaksipengambilanobat";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>{$row['record_number']}</td>";
                echo "<td>{$row['namaObat']}</td>";
                echo "<td>";
                echo "<form action='update_status.php' method='post'>";
                echo "<input type='hidden' name='record_number' value='{$row['record_number']}'>";
                echo "<input type='hidden' name='namaObat' value='{$row['namaObat']}'>";
                echo "<select name='status'>";
                echo "<option value='dalam antrian' " . ($row['status'] == 'dalam antrian' ? 'selected' : '') . ">Dalam Antrian</option>";
                echo "<option value='diracik/diproses' " . ($row['status'] == 'diracik/diproses' ? 'selected' : '') . ">Diracik/Diproses</option>";
                echo "<option value='menunggu pengambilan' " . ($row['status'] == 'menunggu pengambilan' ? 'selected' : '') . ">Menunggu Pengambilan</option>";
                echo "<option value='selesai' " . ($row['status'] == 'selesai' ? 'selected' : '') . ">Selesai</option>";
                echo "</select>";
                echo "<input type='submit' value='Perbarui'>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Tidak ada data ditemukan</td></tr>";
        }
        ?>
    </table>
</body>
</html>
