    <?php
    include 'header.php';
    include 'generate_kode_pasien.php';
    ?>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Input Data Pasien</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #E3FEF7;
                color: #333;
                margin: 0;
                padding: 0;
            }

            .container {
                max-width: 900px;
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
                display: flex;
                flex-direction: column;
            }

            label {
                margin-bottom: 5px;
                font-weight: bold;
            }

            input[type="text"],
            input[type="number"],
            input[type="email"],
            input[type="date"],
            select {
                padding: 10px;
                margin-bottom: 25px;
                border: 1px solid #ccc;
                border-radius: 4px;
                font-size: 16px;
            }

            input[type="submit"] {
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
    </head>
    <body>
        <h1>Input Data Pasien</h1> <!-- Moved the heading outside the container -->
        <div class="container">
            <form action="process_registrasipasien.php" method="post">
                <label for="kode_pasien">Kode Pasien:</label>
                <!-- 2 Huruf Pertama Nama (2), Jenis Kelamin (L/P), Jumlah Huruf Nama Depan (2), 4 angka depan NIK (4), 2 angka akhir Tahun Registrasi (2) -->
                <input type="text" id="kode_pasien" name="kode_pasien" required>

                <label for="namaPasien">Nama Pasien:</label>
                <input type="text" id="namaPasien" name="namaPasien" required>
                
                <label for="jenisKelamin">Jenis Kelamin:</label>
                <select id="jenisKelamin" name="jenisKelamin" required>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                
                <label for="tanggalLahir">Tanggal Lahir:</label>
                <input type="date" id="tanggalLahir" name="tanggalLahir" required>
                
                <label for="umur">Umur:</label>
                <input type="number" id="umur" name="umur" required>
                
                <label for="pekerjaan">Pekerjaan:</label>
                <input type="text" id="pekerjaan" name="pekerjaan" required>
                
                <label for="emailPasien">Email Pasien:</label>
                <input type="email" id="emailPasien" name="emailPasien" required>
                
                <label for="nomorTelepon">Nomor Telepon:</label>
                <input type="text" id="nomorTelepon" name="nomorTelepon" required>
                
                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" required>
                
                <input type="submit" value="Registrasi">
            </form>
        </div>
    </body>
    </html>
