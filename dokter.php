<?php
include 'db_connect.php';

if(isset($_GET['poli'])) {
    $poli = $_GET['poli'];

    $sql = "SELECT nama_dokter FROM dokter WHERE poli='$poli'";
    $result = $conn->query($sql);

    $doctors = array();

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $doctors[] = $row['nama_dokter'];
        }
    }

    echo json_encode($doctors);
}
?>
