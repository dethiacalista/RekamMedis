<?php
// Koneksi ke database
include 'db_connect.php'; 

// Ambil data poli yang dipilih dari request
$selectedPoli = $_GET['poli'];

// Query untuk mengambil data dokter berdasarkan poli yang dipilih
$sql = "SELECT kodepoli, namapoli, nama_dokter FROM poli WHERE kodepoli='$selectedPoli'";

$result = $conn->query($sql);

$doctors = array();

if ($result->num_rows > 0) {
    // Output data dari setiap baris
    while($row = $result->fetch_assoc()) {
        $doctors[] = $row["nama_dokter"];
    }
}

// Kirim data dokter dalam format JSON
echo json_encode($doctors);

$conn->close();
?>
