<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Function to sanitize and validate inputs
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Check if all required fields are filled
    if (empty($_POST["namaPasien"]) || empty($_POST["poliTujuan"]) || empty($_POST["namaDokter"]) || empty($_POST["keluhan"]) || empty($_POST["tindakan"]) || empty($_POST["diagnosis"]) || empty($_POST["status"]) || empty($_POST["riwayatPenyakit"]) || empty($_POST["catatan"])) {
        echo "<script>alert('Semua kolom harus diisi');</script>";
        echo "<script>window.history.back();</script>";
        exit();
    }

    // Sanitize and validate inputs
    $recordNumber = test_input($_POST["recordNumber"]);
    $namaPasien = test_input($_POST["namaPasien"]);
    $poliTujuan = test_input($_POST["poliTujuan"]);
    $namaDokter = test_input($_POST["namaDokter"]);
    $keluhan = test_input($_POST["keluhan"]);
    $tindakan = test_input($_POST["tindakan"]);
    $diagnosis = test_input($_POST["diagnosis"]);
    $status = test_input($_POST["status"]);
    $riwayatPenyakit = test_input($_POST["riwayatPenyakit"]);
    $catatan = test_input($_POST["catatan"]);

    // Insert data into database
    $sql = "INSERT INTO inputdokter (record_number, namaPasien, nama_dokter, poliTujuan, keluhan, tindakan, diagnosis, status, riwayatPenyakit, catatan)
            VALUES ('$recordNumber', '$namaPasien', '$namaDokter', '$poliTujuan', '$keluhan', '$tindakan', '$diagnosis', '$status', '$riwayatPenyakit', '$catatan')";

    if ($conn->query($sql) === TRUE) {
        // Insert data into rekammedis table
        $sqlRekamMedis = "INSERT INTO rekammedis (record_number, namaPasien, nama_dokter, keluhan, tindakan, diagnosis, status, riwayatPenyakit, poliTujuan)
                        VALUES ('$recordNumber', '$namaPasien', '$namaDokter', '$keluhan', '$tindakan', '$diagnosis', '$status', '$riwayatPenyakit', '$poliTujuan')";
        if ($conn->query($sqlRekamMedis) === TRUE) {
            echo "<script>alert('Data berhasil disimpan');</script>";
            echo "<script>window.history.back();</script>";
            exit();
        } else {
            echo "<script>alert('Error: " . $sqlRekamMedis . "\\n" . $conn->error . "');</script>";
            echo "<script>window.history.back();</script>";
            exit();
        }
    } else {
        echo "<script>alert('Error: " . $sql . "\\n" . $conn->error . "');</script>";
        echo "<script>window.history.back();</script>";
        exit();
    }
} else {
    header("Location: inputpengecekandokter.php");
    exit();
}
?>