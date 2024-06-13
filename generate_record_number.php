<?php
include 'db_connect.php';

$poliCode = $_GET['poli'];

function generateRecordNumber($poliCode) {
    global $conn;
    $bulan = date('m'); // Ambil bulan sekarang
    $tahun = date('Y'); // Ambil tahun sekarang
    
    // Konstruksi nomor rekam medis dengan pola: kodepoli-bulan-tahun-urutan
    $sql = "SELECT MAX(CAST(SUBSTRING(record_number, -3) AS UNSIGNED)) AS max_order 
            FROM inputdokter 
            WHERE poliTujuan='$poliCode' AND MONTH(created_at) = $bulan AND YEAR(created_at) = $tahun";
    $result = $conn->query($sql);
    
    if ($result === FALSE) {
        die("Error: " . $conn->error);
    }

    $row = $result->fetch_assoc();
    $max_order = $row['max_order'] ? intval($row['max_order']) : 0;
    $next_order = $max_order + 1;
    
    // Format nomor urutan dengan panjang tetap 3 digit (misal: 001, 002, dst.)
    $next_order_formatted = sprintf('%03d', $next_order);
    
    return "$poliCode-$bulan-$tahun-$next_order_formatted";
}

echo generateRecordNumber($poliCode);
?>