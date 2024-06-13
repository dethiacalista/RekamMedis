<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Input Pengambilan Obat</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <style>
        /* CSS styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #E3FEF7;
        }

        h1 {
            text-align: center;
            color: #135D66;
        }

        form {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
            display: block;
        }

        input[type="text"],
        select {
            width: 98%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        .radio-group {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .radio-group label {
            margin-right: 15px;
            display: flex;
            align-items: center;
        }

        input[type="submit"] {
            padding: 10px 15px;
            width: 100%;
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

        .form-group {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <h1>Input Pengambilan Obat</h1>
    <form action="process_pengambilanobat.php" method="post">
        <div class="form-group">
            <label for="record_number">Record Number:</label>
            <select id="record_number" name="record_number" required>
                <?php
                include 'db_connect.php';
                $sql = "SELECT record_number FROM inputdokter";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='{$row['record_number']}'>{$row['record_number']}</option>";
                }
                ?>
            </select>
        </div>

        <div class="form-group">
            <label for="nama_obat">Nama Obat:</label>
            <select id="nama_obat" name="nama_obat" required style="width:100%;">
                <?php
                $sql = "SELECT kodeObat, namaObat FROM obat";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='{$row['kodeObat']}' data-kode='{$row['kodeObat']}'>{$row['namaObat']}</option>";
                }
                ?>
            </select>
        </div>

        <div class="form-group">
            <label for="kode_obat">Kode Obat:</label>
            <input type="text" id="kode_obat" name="kode_obat" readonly>
        </div>

        <div class="form-group">
            <label for="resep">Resep:</label>
            <div class="radio-group">
                <label for="resep_ya">
                    <input type="radio" id="resep_ya" name="resep" value="1" required> Ya
                </label>
                <label for="resep_tidak">
                    <input type="radio" id="resep_tidak" name="resep" value="0" required> Tidak
                </label>
            </div>
        </div>

        <input type="submit" value="Simpan">
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#nama_obat').select2();
            
            // Set nilai kode obat saat nama obat dipilih
            $('#nama_obat').change(function() {
                var kodeObat = $(this).find(':selected').data('kode');
                $('#kode_obat').val(kodeObat);
            });
        });
    </script>
</body>
</html>
