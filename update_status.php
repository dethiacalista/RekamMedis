<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if record_number, namaObat, and status are set
    if (isset($_POST['record_number']) && isset($_POST['namaObat']) && isset($_POST['status'])) {
        $record_number = $_POST['record_number'];
        $namaObat = $_POST['namaObat'];
        $status = $_POST['status'];

        // Prepare the update statement
        $sql = "UPDATE transaksipengambilanobat SET status = ? WHERE record_number = ? AND namaObat = ?";
        $stmt = $conn->prepare($sql);

        if ($stmt === false) {
            // Prepare statement failed, show an error message
            echo "<script>
                    alert('Gagal menyiapkan statement SQL');
                    window.location.href='lihattransaksipengambilanobat.php';
                  </script>";
            exit();
        }

        // Bind parameters
        $stmt->bind_param("sis", $status, $record_number, $namaObat);

        if ($stmt->execute()) {
            // Update successful, redirect with a success message
            echo "<script>
                    alert('Status berhasil diupdate');
                    window.location.href='lihattransaksipengambilanobat.php';
                  </script>";
        } else {
            // Update failed, show an error message
            echo "<script>
                    alert('Gagal mengupdate status');
                    window.location.href='lihattransaksipengambilanobat.php';
                  </script>";
        }
        
        $stmt->close();
    } else {
        // record_number, namaObat, or status not set, show an error message
        echo "<script>
                alert('Nomor rekam, nama obat, atau status tidak ditemukan');
                window.location.href='lihattransaksipengambilanobat.php';
              </script>";
    }
}

$conn->close();
?>
