<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Penilaian</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            padding: 40px;
            width: 100%;
            max-width: 500px;
            text-align: center;
        }
        
        h1 {
            color: #333;
            margin-bottom: 30px;
            font-size: 28px;
            position: relative;
            padding-bottom: 15px;
        }
        
        h1::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            border-radius: 2px;
        }
        
        .nilai-display {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 15px;
            margin: 20px 0;
            border-left: 5px solid #2575fc;
        }
        
        .nilai-display p {
            font-size: 18px;
            color: #555;
        }
        
        .nilai-display strong {
            color: #2575fc;
            font-size: 22px;
        }
        
        .grade {
            padding: 20px;
            border-radius: 10px;
            margin: 25px 0;
            font-size: 32px;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        
        .grade-A {
            background-color: #d4edda;
            color: #155724;
            border: 2px solid #c3e6cb;
        }
        
        .grade-B {
            background-color: #fff3cd;
            color: #856404;
            border: 2px solid #ffeaa7;
        }
        
        .grade-C {
            background-color: #f8d7da;
            color: #721c24;
            border: 2px solid #f5c6cb;
        }
        
        .info {
            margin-top: 30px;
            padding: 15px;
            background-color: #e9ecef;
            border-radius: 8px;
            font-size: 14px;
            color: #6c757d;
        }
        
        .info p {
            margin-bottom: 5px;
        }
        
        .footer {
            margin-top: 20px;
            color: #6c757d;
            font-size: 14px;
        }
        
        .form-container {
            margin-top: 20px;
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 8px;
        }
        
        .form-container input {
            padding: 10px;
            width: 80px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-right: 10px;
            text-align: center;
            font-size: 16px;
        }
        
        .form-container button {
            padding: 10px 15px;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        
        .form-container button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Sistem Penilaian</h1>
        
        <?php
        // Mengambil nilai dari parameter URL jika ada, jika tidak gunakan nilai default
        $nilai = isset($_GET['nilai']) ? intval($_GET['nilai']) : 80;
        
        // Menampilkan nilai
        echo '<div class="nilai-display">';
        echo '<p>Nilai: <strong>' . $nilai . '</strong></p>';
        echo '</div>';
        
        // Menentukan grade berdasarkan nilai
        echo '<div class="grade ';
        if ($nilai >= 90) {
            echo 'grade-A">A';
        } elseif ($nilai >= 75) {
            echo 'grade-B">B';
        } else {
            echo 'grade-C">C';
        }
        echo '</div>';
        ?>
        
        <div class="form-container">
            <p>Coba nilai lain:</p>
            <form method="GET">
                <input type="number" name="nilai" min="0" max="100" value="<?php echo $nilai; ?>" required>
                <button type="submit">Cek Grade</button>
            </form>
        </div>
        
        <div class="info">
            <p><strong>Kriteria Penilaian:</strong></p>
            <p>Nilai ≥ 90: Grade A</p>
            <p>Nilai ≥ 75: Grade B</p>
            <p>Nilai < 75: Grade C</p>
        </div>
        
        <div class="footer">
            <p>Contoh implementasi struktur kontrol if-elseif-else dalam PHP</p>
        </div>
    </div>
</body>
</html>