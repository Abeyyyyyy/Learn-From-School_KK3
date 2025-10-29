<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa - CRUD App</title>
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
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
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
            font-size: 2.5em;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .header p {
            font-size: 1.1em;
            opacity: 0.9;
        }

        .content {
            padding: 40px;
        }

        .btn-tambah {
            display: inline-block;
            background: linear-gradient(135deg, #176B87 0%, #86B6F6 100%);
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(23, 107, 135, 0.3);
            margin-bottom: 30px;
        }

        .btn-tambah:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(23, 107, 135, 0.4);
        }

        .table-container {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(134, 182, 246, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: linear-gradient(135deg, #B4D4FF 0%, #86B6F6 100%);
            color: #176B87;
            padding: 15px 20px;
            text-align: left;
            font-weight: 600;
            font-size: 1.1em;
        }

        td {
            padding: 15px 20px;
            border-bottom: 1px solid #EEF5FF;
            color: #333;
        }

        tr:hover {
            background: #EEF5FF;
            transition: background 0.3s ease;
        }

        .btn-action {
            display: inline-block;
            padding: 8px 15px;
            text-decoration: none;
            border-radius: 25px;
            font-size: 0.9em;
            font-weight: 500;
            transition: all 0.3s ease;
            margin-right: 5px;
        }

        .btn-edit {
            background: #B4D4FF;
            color: #176B87;
        }

        .btn-hapus {
            background: #FF6B6B;
            color: white;
        }

        .btn-edit:hover {
            background: #86B6F6;
            transform: translateY(-2px);
        }

        .btn-hapus:hover {
            background: #FF5252;
            transform: translateY(-2px);
        }

        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: #86B6F6;
        }

        .empty-state i {
            font-size: 4em;
            margin-bottom: 20px;
        }

        .footer {
            text-align: center;
            padding: 20px;
            background: #EEF5FF;
            color: #176B87;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>📚 Data Siswa</h1>
            <p>Management Data Siswa - CRUD Application</p>
        </div>

        <div class="content">
            <a href="tambah.php" class="btn-tambah">+ Tambah Data Siswa</a>

            <div class="table-container">
                <?php
                $sql = "SELECT * FROM siswa";
                $result = mysqli_query($koneksi, $sql);
                
                if (mysqli_num_rows($result) > 0) {
                ?>
                <table>
                    <thead>
                        <tr>
                            <th>NIS</th>
                            <th>Nama Siswa</th>
                            <th>Jurusan</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><strong><?= $row['nis']; ?></strong></td>
                            <td><?= $row['nama']; ?></td>
                            <td><span style="background: #B4D4FF; padding: 5px 12px; border-radius: 15px; color: #176B87;"><?= $row['jurusan']; ?></span></td>
                            <td><?= $row['kelas']; ?></td>
                            <td>
                                <a href="edit.php?nis=<?= $row['nis']; ?>" class="btn-action btn-edit">✏ Edit</a>
                                <a href="hapus.php?nis=<?= $row['nis']; ?>" class="btn-action btn-hapus" onclick="return confirm('Yakin ingin menghapus data <?= $row['nama']; ?>?')">🗑 Hapus</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php } else { ?>
                <div class="empty-state">
                    <div>📝</div>
                    <h3>Belum ada data siswa</h3>
                    <p>Silakan tambah data siswa terlebih dahulu</p>
                </div>
                <?php } ?>
            </div>
        </div>

        <div class="footer">
            <p>&copy; 2024 CRUD App - Management Data Siswa</p>
        </div>
    </div>
</body>
</html>