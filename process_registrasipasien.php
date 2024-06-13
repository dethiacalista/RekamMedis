<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $kode_pasien = $_POST['kode_pasien'];
    $namaPasien = $_POST['namaPasien'];
    $jenisKelamin = $_POST['jenisKelamin'];
    $tanggalLahir = $_POST['tanggalLahir'];
    $umur = $_POST['umur'];
    $pekerjaan = $_POST['pekerjaan'];
    $emailPasien = $_POST['emailPasien'];
    $nomorTelepon = $_POST['nomorTelepon'];
    $alamat = $_POST['alamat'];

    $sql_pasien = "INSERT INTO pasien (kode_pasien, namaPasien, jenisKelamin, tanggalLahir, umur, pekerjaan, emailPasien, nomorTelepon, alamat) 
            VALUES ('$kode_pasien', '$namaPasien', '$jenisKelamin', '$tanggalLahir', '$umur', '$pekerjaan', '$emailPasien', '$nomorTelepon', '$alamat')";

    if ($conn->query($sql_pasien) === TRUE) {
        // Setelah data pasien dimasukkan, ambil ID pasien yang baru saja dimasukkan
        $last_insert_id = $conn->insert_id;

        // Masukkan data kode_pasien ke dalam tabel rekammedis
        $sql_rekam_medis = "INSERT INTO rekammedis (kode_pasien, namaPasien) 
                            VALUES ('$kode_pasien', '$namaPasien')";
        if ($conn->query($sql_rekam_medis) === TRUE) {
            echo "<script>alert('Data pasien berhasil ditambahkan'); window.location.href = 'inputregistrasipasien.php';</script>";
        } else {
            echo "Error: " . $sql_rekam_medis . "<br>" . $conn->error;
        }
    } else {
        echo "Error: " . $sql_pasien . "<br>" . $conn->error;
    }

    $conn->close();
}
?>