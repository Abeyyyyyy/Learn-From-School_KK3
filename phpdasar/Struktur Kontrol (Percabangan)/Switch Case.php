<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hari dalam Seminggu</title>
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
        
        .hari-display {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 15px;
            margin: 20px 0;
            border-left: 5px solid #2575fc;
        }
        
        .hari-display p {
            font-size: 18px;
            color: #555;
        }
        
        .hari-display strong {
            color: #2575fc;
            font-size: 22px;
            text-transform: capitalize;
        }
        
        .pesan {
            padding: 20px;
            border-radius: 10px;
            margin: 25px 0;
            font-size: 24px;
            font-weight: bold;
            transition: all 0.3s ease;
            min-height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .pesan-senin {
            background-color: #e3f2fd;
            color: #0d47a1;
            border: 2px solid #bbdefb;
        }
        
        .pesen-jumat {
            background-color: #e8f5e9;
            color: #1b5e20;
            border: 2px solid #c8e6c9;
        }
        
        .pesan-biasa {
            background-color: #fff3e0;
            color: #e65100;
            border: 2px solid #ffe0b2;
        }
        
        .form-container {
            margin-top: 20px;
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 8px;
        }
        
        .form-container select {
            padding: 10px;
            width: 200px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-right: 10px;
            font-size: 16px;
            background-color: white;
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
        
        .semua-hari {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }
        
        .hari-btn {
            padding: 8px 12px;
            background-color: #f1f3f4;
            border: 1px solid #ddd;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .hari-btn:hover {
            background-color: #e1e5e9;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hari dalam Seminggu</h1>
        
        <?php
        // Mengambil hari dari parameter URL jika ada, jika tidak gunakan hari default
        $hari = isset($_GET['hari']) ? $_GET['hari'] : "Senin";
        
        // Menampilkan hari yang dipilih
        echo '<div class="hari-display">';
        echo '<p>Hari: <strong>' . $hari . '</strong></p>';
        echo '</div>';
        
        // Menentukan pesan berdasarkan hari menggunakan switch
        echo '<div class="pesan ';
        switch($hari) {
            case "Senin": 
                echo 'pesan-senin">Awal minggu';
                break;
            case "Jumat": 
                echo 'pesen-jumat">Menjelang weekend';
                break;
            default: 
                echo 'pesan-biasa">Hari biasa';
        }
        echo '</div>';
        ?>
        
        <div class="form-container">
            <p>Pilih hari lain:</p>
            <form method="GET">
                <select name="hari">
                    <option value="Senin" <?php if($hari == "Senin") echo "selected"; ?>>Senin</option>
                    <option value="Selasa" <?php if($hari == "Selasa") echo "selected"; ?>>Selasa</option>
                    <option value="Rabu" <?php if($hari == "Rabu") echo "selected"; ?>>Rabu</option>
                    <option value="Kamis" <?php if($hari == "Kamis") echo "selected"; ?>>Kamis</option>
                    <option value="Jumat" <?php if($hari == "Jumat") echo "selected"; ?>>Jumat</option>
                    <option value="Sabtu" <?php if($hari == "Sabtu") echo "selected"; ?>>Sabtu</option>
                    <option value="Minggu" <?php if($hari == "Minggu") echo "selected"; ?>>Minggu</option>
                </select>
                <button type="submit">Tampilkan Pesan</button>
            </form>
            
            <div class="semua-hari">
                <div class="hari-btn" onclick="pilihHari('Senin')">Senin</div>
                <div class="hari-btn" onclick="pilihHari('Selasa')">Selasa</div>
                <div class="hari-btn" onclick="pilihHari('Rabu')">Rabu</div>
                <div class="hari-btn" onclick="pilihHari('Kamis')">Kamis</div>
                <div class="hari-btn" onclick="pilihHari('Jumat')">Jumat</div>
                <div class="hari-btn" onclick="pilihHari('Sabtu')">Sabtu</div>
                <div class="hari-btn" onclick="pilihHari('Minggu')">Minggu</div>
            </div>
        </div>
        
        <div class="info">
            <p><strong>Pesan berdasarkan hari:</strong></p>
            <p>Senin: Awal minggu</p>
            <p>Jumat: Menjelang weekend</p>
            <p>Hari lainnya: Hari biasa</p>
        </div>
        
        <div class="footer">
            <p>Contoh implementasi struktur kontrol switch-case dalam PHP</p>
        </div>
    </div>
    
    <script>
        function pilihHari(hari) {
            // Membuat URL dengan parameter hari yang dipilih
            const url = new URL(window.location.href);
            url.searchParams.set('hari', hari);
            window.location.href = url.toString();
        }
    </script>
</body>
</html>