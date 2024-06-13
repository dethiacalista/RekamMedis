<?php
include 'db_connect.php';

function generateKodePasien() {
    global $conn;
    $day = date('d'); // Ambil tanggal sekarang
    $month = date('m'); // Ambil bulan sekarang
    $year = date('Y'); // Ambil tahun sekarang
    
    // Konstruksi kode pasien dengan pola: day-month-year-urutan
    $sql = "SELECT MAX(CAST(SUBSTRING(kode_pasien, -3) AS UNSIGNED)) AS max_order 
            FROM pasien 
            WHERE DAY(CURDATE()) = $day AND MONTH(CURDATE()) = $month AND YEAR(CURDATE()) = $year";
    $result = $conn->query($sql);
    
    if ($result === FALSE) {
        die("Error: " . $conn->error);
    }

    $row = $result->fetch_assoc();
    $max_order = $row['max_order'] ? intval($row['max_order']) : 0;
    
    // Jika tanggal, bulan, atau tahun sudah berubah, reset urutan menjadi 0
    if ($max_order >= 999) {
        $max_order = 0;
    }
    
    $next_order = $max_order + 1;
    
    // Format nomor urutan dengan panjang tetap 3 digit (misal: 001, 002, dst.)
    $next_order_formatted = sprintf('%03d', $next_order);
    
    return "$day-$month-$year-$next_order_formatted";
}

?>