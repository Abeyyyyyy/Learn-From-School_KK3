<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Kelulusan</title>
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
        
        .status {
            padding: 15px;
            border-radius: 10px;
            margin: 25px 0;
            font-size: 24px;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        
        .lulus {
            background-color: #d4edda;
            color: #155724;
            border: 2px solid #c3e6cb;
        }
        
        .tidak-lulus {
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
    </style>
</head>
<body>
    <div class="container">
        <h1>Status Kelulusan</h1>
        
        <?php
        // Nilai siswa
        $nilai = 80;
        
        // Menampilkan nilai
        echo '<div class="nilai-display">';
        echo '<p>Nilai: <strong>' . $nilai . '</strong></p>';
        echo '</div>';
        
        // Menentukan status kelulusan
        echo '<div class="status ' . ($nilai >= 75 ? 'lulus' : 'tidak-lulus') . '">';
        if ($nilai >= 75) {
            echo "LULUS";
        } else {
            echo "TIDAK LULUS";
        }
        echo '</div>';
        ?>
        
        <div class="info">
            <p><strong>Kriteria Kelulusan:</strong></p>
            <p>Nilai ≥ 75: Lulus</p>
            <p>Nilai < 75: Tidak Lulus</p>
        </div>
        
        <div class="footer">
            <p>Contoh implementasi struktur kontrol if-else dalam PHP</p>
        </div>
    </div>
</body>
</html>