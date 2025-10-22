<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran</title>
    <style>
        :root {
            --black: #000000;
            --blue-dark: #5682B1;
            --blue-light: #739EC9;
            --cream: #FFE8DB;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, var(--blue-light), var(--blue-dark));
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            width: 100%;
            max-width: 800px;
            background-color: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }
        
        .header {
            background: linear-gradient(to right, var(--blue-dark), var(--blue-light));
            color: white;
            padding: 25px;
            text-align: center;
        }
        
        .header h1 {
            font-size: 28px;
            margin-bottom: 10px;
            font-weight: 600;
        }
        
        .header p {
            font-size: 16px;
            opacity: 0.9;
        }
        
        .content {
            padding: 30px;
        }
        
        .success-message {
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            border-left: 5px solid #28a745;
        }
        
        .error-message {
            background-color: #f8d7da;
            color: #721c24;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            border-left: 5px solid #dc3545;
        }
        
        .results-table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 25px;
        }
        
        .results-table th {
            background-color: var(--blue-light);
            color: white;
            padding: 15px;
            text-align: left;
            width: 30%;
        }
        
        .results-table td {
            padding: 15px;
            border-bottom: 1px solid #e0e0e0;
        }
        
        .results-table tr:last-child td {
            border-bottom: none;
        }
        
        .back-button {
            display: inline-block;
            background: linear-gradient(to right, var(--blue-dark), var(--blue-light));
            color: white;
            text-decoration: none;
            padding: 12px 25px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s;
            text-align: center;
        }
        
        .back-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(86, 130, 177, 0.4);
        }
        
        .button-container {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Data Pendaftaran Berhasil Dikirim</h1>
            <p>Terima kasih telah mendaftar</p>
        </div>
        
        <div class="content">
            <?php
            // Validasi apakah semua data telah diisi
            if (isset($_POST['nama']) && isset($_POST['email']) && isset($_POST['jenis_kelamin']) && 
                isset($_POST['hobi']) && isset($_POST['jurusan']) && isset($_POST['alamat'])) {
                
                // Mengambil data dari form
                $nama = htmlspecialchars($_POST['nama']);
                $email = htmlspecialchars($_POST['email']);
                $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
                $hobi = $_POST['hobi'];
                $jurusan = htmlspecialchars($_POST['jurusan']);
                $alamat = htmlspecialchars($_POST['alamat']);
                
                echo '<div class="success-message">';
                echo '<strong>Sukses!</strong> Data pendaftaran Anda telah berhasil disimpan.';
                echo '</div>';
                
                // Menampilkan data dalam tabel
                echo "<table class='results-table'>";
                echo "<tr><th>Nama Lengkap</th><td>$nama</td></tr>";
                echo "<tr><th>Email</th><td>$email</td></tr>";
                echo "<tr><th>Jenis Kelamin</th><td>$jenis_kelamin</td></tr>";
                
                // Menampilkan hobi
                echo "<tr><th>Hobi</th><td>";
                if (is_array($hobi)) {
                    echo implode(", ", $hobi);
                } else {
                    echo $hobi;
                }
                echo "</td></tr>";
                
                echo "<tr><th>Jurusan</th><td>$jurusan</td></tr>";
                echo "<tr><th>Alamat</th><td>$alamat</td></tr>";
                echo "</table>";
                
            } else {
                // Jika ada data yang kosong
                echo '<div class="error-message">';
                echo '<strong>Error!</strong> Semua data harus diisi! Silakan kembali ke form dan lengkapi data Anda.';
                echo '</div>';
            }
            ?>
            
            <div class="button-container">
                <a href="index.html" class="back-button">Kembali ke Form Pendaftaran</a>
            </div>
        </div>
    </div>
</body>
</html>