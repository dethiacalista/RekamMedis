<?php 
include 'header.php'; 
include 'db_connect.php'; 
include 'generate_kode_pasien.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Input Pemeriksaan Dokter</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <style>
        /* CSS styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #E3FEF7;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #135D66;
        }

        form {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
            display: block;
        }

        input[type="text"],
        input[type="number"],
        select,
        textarea {
            width: 97%;
            padding: 10px;
            margin-bottom: 7px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px 15px;
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
    <script>
    function fetchDoctors() {
        var poliCode = document.getElementById('poliTujuan').value;
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'poli.php?poli=' + poliCode, true);
        xhr.onload = function () {
            if (this.status == 200) {
                var doctors = JSON.parse(this.responseText);
                var doctorSelect = document.getElementById('namaDokter');
                doctorSelect.innerHTML = ''; // Clear previous options
                if (doctors.length > 0) {
                    doctors.forEach(function(doctor) {
                        var option = document.createElement('option');
                        option.value = doctor;
                        option.textContent = doctor;
                        doctorSelect.appendChild(option);
                    });
                } else {
                    var option = document.createElement('option');
                    option.textContent = 'Tidak ada dokter tersedia';
                    doctorSelect.appendChild(option);
                }
            }
        };
        xhr.send();
        
        var recordNumberInput = document.getElementById('recordNumber');
        var xhrRecord = new XMLHttpRequest();
        xhrRecord.open('GET', 'generate_record_number.php?poli=' + poliCode, true);
        xhrRecord.onload = function() {
            if (this.status == 200) {
                recordNumberInput.value = this.responseText;
            }
        };
        xhrRecord.send();
    }
    </script>
</head>
<body>
    <h1>Input Pemeriksaan Dokter</h1>
    <form action="process_pengecekandokter.php" method="post">
        <label for="recordNumber">Record Number:</label>
        <input type="text" id="recordNumber" name="recordNumber" value="" required><br><br>
        
        <label for="kode_pasien">Kode Pasien:</label>
            <input type="text" id="kode_pasien" name="kode_pasien" readonly><br><br>
            
        <label for="namaPasien">Nama Pasien:</label>
        <select id="namaPasien" name="namaPasien" class="form-control" required>
            <option value="">Pilih Nama Pasien</option>
            <?php
            $query = "SELECT kode_pasien, namaPasien FROM pasien";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='{$row['namaPasien']}' data-kodepasien='{$row['kode_pasien']}'>{$row['namaPasien']}</option>";
            }
            ?>
        </select><br><br>

        <label for="poliTujuan">Poli Tujuan:</label>
        <select id="poliTujuan" name="poliTujuan" class="form-control" required onchange="fetchDoctors()">
            <option value="">Pilih Poli</option>
            <option value="PU">Poli Umum</option>
            <option value="PA">Poli Anak</option>
            <option value="PKK">Poli Kulit dan Kelamin</option>
            <option value="PTHT">Poli THT</option>
            <option value="PK">Poli Kandungan dan Kebidanan</option>
            <option value="PM">Poli Mata</option>
            <option value="PJ">Poli Jantung</option>
            <option value="PS">Poli Saraf</option>
            <option value="PB">Poli Bedah</option>
            <option value="PP">Poli Paru</option>
            <option value="PR">Poli Rehabilitasi Medis</option>
            <option value="PPK">Poli Psikiatri</option>
            <option value="PGZ">Poli Gizi</option>
            <option value="PPD">Poli Penyakit Dalam</option>
            <option value="PUR">Poli Urologi</option>
            <option value="PIPT">Poli Infeksi dan Penyakit Tropis</option>
        </select><br><br>

        <label for="namaDokter">Nama Dokter:</label>
        <select id="namaDokter" name="namaDokter" class="form-control" required>
            <option value="">Pilih Dokter</option>
        </select><br><br>
        
        <label for="keluhan">Keluhan:</label>
        <input type="text" id="keluhan" name="keluhan" required><br><br>
        
        <label for="tindakan">Tindakan:</label>
        <input type="text" id="tindakan" name="tindakan" required><br><br>
        
        <label for="diagnosis">Diagnosis:</label>
        <input type="text" id="diagnosis" name="diagnosis" required><br><br>
        
        <label for="status">Status:</label>
        <input type="text" id="status" name="status" required><br><br>

        <label for="riwayatPenyakit">Riwayat Penyakit:</label>
        <input type="text" id="riwayatPenyakit" name="riwayatPenyakit" required><br><br>
        
        <label for="catatan">Catatan:</label>
        <input type="text" id="catatan" name="catatan" required><br><br>

        <input type="submit" value="Simpan">
    </form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.form-control').select2();

        $('#namaPasien').on('change', function() {
            var kodePasien = $(this).find(':selected').data('kodepasien');
            $('#kode_pasien').val(kodePasien);
        });
    });
</script>
</body>
</html>