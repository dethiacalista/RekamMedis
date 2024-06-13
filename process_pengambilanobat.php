<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data yang dikirimkan melalui form
    $record_number = $_POST['record_number'];
    $kode_obat = $_POST['kode_obat']; // Tangkap nilai kode obat
    $resep = $_POST['resep'];

    // Query untuk mendapatkan nama obat berdasarkan kode obat
    $sql_obat = "SELECT namaObat FROM obat WHERE kodeObat = '$kode_obat'";
    $result_obat = $conn->query($sql_obat);
    $row_obat = $result_obat->fetch_assoc();
    $obat = $row_obat['namaObat']; // Ambil nama obat dari hasil query

    // Lakukan proses penyimpanan data ke database
    $sql = "INSERT INTO transaksipengambilanobat (record_number, kodeObat, namaObat, resep) VALUES ('$record_number', '$kode_obat', '$obat', '$resep')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Pengambilan obat berhasil disimpan.');</script>";
        echo "<script>window.history.back();</script>";
    } else {
        echo "<script>alert('Error: " . $sql . "\\n" . $conn->error . "');</script>";
    }
}

$conn->close();
?>