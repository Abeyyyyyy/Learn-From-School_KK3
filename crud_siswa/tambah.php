<?php
include 'koneksi.php';

$error = "";
$success = "";

if(isset($_POST['submit'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $kelas = $_POST['kelas'];
    
    // Cek apakah NIS sudah ada
    $cek = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nis='$nis'");
    if(mysqli_num_rows($cek) > 0) {
        $error = "NIS $nis sudah ada dalam database!";
    } else {
        $sql = "INSERT INTO siswa (nis, nama, jurusan, kelas) VALUES ('$nis', '$nama', '$jurusan', '$kelas')";
        
        if(mysqli_query($koneksi, $sql)) {
            $success = "Data siswa berhasil ditambahkan!";
        } else {
            $error = "Error: " . mysqli_error($koneksi);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa - CRUD App</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #EEF5FF 0%, #B4D4FF 100%);
            min-height: 100vh;
            padding: 40px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            max-width: 600px;
            width: 100%;
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(23, 107, 135, 0.1);
            overflow: hidden;
        }

        .header {
            background: linear-gradient(135deg, #176B87 0%, #86B6F6 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }

        .header h1 {
            font-size: 2.2em;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .content {
            padding: 40px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #176B87;
            font-weight: 600;
        }

        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 15px;
            border: 2px solid #EEF5FF;
            border-radius: 12px;
            font-size: 1em;
            transition: all 0.3s ease;
            background: #f8fbff;
        }

        input[type="text"]:focus, input[type="number"]:focus {
            outline: none;
            border-color: #86B6F6;
            background: white;
            box-shadow: 0 0 0 3px rgba(134, 182, 246, 0.2);
        }

        .btn-group {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        .btn {
            flex: 1;
            padding: 15px;
            border: none;
            border-radius: 12px;
            font-size: 1.1em;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: center;
            text-decoration: none;
        }

        .btn-submit {
            background: linear-gradient(135deg, #176B87 0%, #86B6F6 100%);
            color: white;
        }

        .btn-cancel {
            background: #EEF5FF;
            color: #176B87;
            border: 2px solid #B4D4FF;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(23, 107, 135, 0.3);
        }

        .alert {
            padding: 15px;
            border-radius: 12px;
            margin-bottom: 25px;
            font-weight: 500;
        }

        .alert-error {
            background: #FFE6E6;
            color: #D8000C;
            border: 1px solid #FFB3B3;
        }

        .alert-success {
            background: #E6FFE6;
            color: #2E8B57;
            border: 1px solid #B3FFB3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>➕ Tambah Data Siswa</h1>
            <p>Isi form berikut untuk menambah data siswa baru</p>
        </div>

        <div class="content">
            <?php if($error != "") { ?>
                <div class="alert alert-error"><?php echo $error; ?></div>
            <?php } ?>
            
            <?php if($success != "") { ?>
                <div class="alert alert-success"><?php echo $success; ?></div>
            <?php } ?>

            <form method="POST">
                <div class="form-group">
                    <label for="nis">NIS</label>
                    <input type="number" id="nis" name="nis" placeholder="Masukkan NIS (contoh: 2425120672)" required>
                </div>

                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap siswa" required>
                </div>

                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" id="jurusan" name="jurusan" placeholder="Masukkan jurusan (contoh: RPL)" required>
                </div>

                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <input type="text" id="kelas" name="kelas" placeholder="Masukkan kelas (contoh: XI RPL 3)" required>
                </div>

                <div class="btn-group">
                    <button type="submit" name="submit" class="btn btn-submit">💾 Simpan Data</button>
                    <a href="index.php" class="btn btn-cancel">← Kembali</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>