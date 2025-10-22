<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir Toko</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #2c3e50;
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #3498db;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }
        button:hover {
            background-color: #2980b9;
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 4px;
        }
        .result h2 {
            margin-top: 0;
            color: #2c3e50;
        }
        .result-item {
            margin-bottom: 8px;
            display: flex;
            justify-content: space-between;
        }
        .total {
            font-weight: bold;
            border-top: 1px solid #ddd;
            padding-top: 10px;
            margin-top: 10px;
        }
        .discount {
            color: #e74c3c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Kasir Toko</h1>
        
        <form method="post" action="">
            <div class="form-group">
                <label for="beras">Jumlah Beras (kg):</label>
                <input type="number" id="beras" name="beras" min="0" step="0.1" value="<?php echo isset($_POST['beras']) ? $_POST['beras'] : ''; ?>" required>
            </div>
            
            <div class="form-group">
                <label for="gula">Jumlah Gula (kg):</label>
                <input type="number" id="gula" name="gula" min="0" step="0.1" value="<?php echo isset($_POST['gula']) ? $_POST['gula'] : ''; ?>" required>
            </div>
            
            <div class="form-group">
                <label for="terigu">Jumlah Terigu (kg):</label>
                <input type="number" id="terigu" name="terigu" min="0" step="0.1" value="<?php echo isset($_POST['terigu']) ? $_POST['terigu'] : ''; ?>" required>
            </div>
            
            <div class="form-group">
                <label for="uang">Uang yang Dibayarkan (Rp):</label>
                <input type="number" id="uang" name="uang" min="0" value="<?php echo isset($_POST['uang']) ? $_POST['uang'] : ''; ?>" required>
            </div>
            
            <button type="submit" name="hitung">Hitung Total</button>
        </form>
        
        <?php
        if (isset($_POST['hitung'])) {
            // Harga barang
            $harga_beras = 17000;
            $harga_gula = 15000;
            $harga_terigu = 12000;
            
            // Jumlah barang
            $jumlah_beras = floatval($_POST['beras']);
            $jumlah_gula = floatval($_POST['gula']);
            $jumlah_terigu = floatval($_POST['terigu']);
            $uang_dibayar = floatval($_POST['uang']);
            
            // Hitung subtotal
            $total_beras = $jumlah_beras * $harga_beras;
            $total_gula = $jumlah_gula * $harga_gula;
            $total_terigu = $jumlah_terigu * $harga_terigu;
            
            // Total sebelum diskon
            $total_belanja = $total_beras + $total_gula + $total_terigu;
            
            // Hitung diskon
            $diskon = 0;
            if ($total_belanja > 200000) {
                $diskon = $total_belanja * 0.02;
            }
            
            // Total setelah diskon
            $total_setelah_diskon = $total_belanja - $diskon;
            
            // Hitung kembalian
            $kembalian = $uang_dibayar - $total_setelah_diskon;
            
            // Format ke Rupiah
            function formatRupiah($angka) {
                return "Rp. " . number_format($angka, 0, ',', '.');
            }
        ?>
        
        <div class="result">
            <h2>Detail Pembayaran</h2>
            
            <div class="result-item">
                <span>Beras (<?php echo $jumlah_beras; ?> kg):</span>
                <span><?php echo formatRupiah($total_beras); ?></span>
            </div>
            
            <div class="result-item">
                <span>Gula (<?php echo $jumlah_gula; ?> kg):</span>
                <span><?php echo formatRupiah($total_gula); ?></span>
            </div>
            
            <div class="result-item">
                <span>Terigu (<?php echo $jumlah_terigu; ?> kg):</span>
                <span><?php echo formatRupiah($total_terigu); ?></span>
            </div>
            
            <div class="result-item total">
                <span>Total Belanja:</span>
                <span><?php echo formatRupiah($total_belanja); ?></span>
            </div>
            
            <?php if ($diskon > 0): ?>
            <div class="result-item discount">
                <span>Diskon (2%):</span>
                <span>-<?php echo formatRupiah($diskon); ?></span>
            </div>
            <?php endif; ?>
            
            <div class="result-item total">
                <span>Total yang Harus Dibayar:</span>
                <span><?php echo formatRupiah($total_setelah_diskon); ?></span>
            </div>
            
            <div class="result-item">
                <span>Uang Dibayarkan:</span>
                <span><?php echo formatRupiah($uang_dibayar); ?></span>
            </div>
            
            <div class="result-item total">
                <span>Kembalian:</span>
                <span><?php echo formatRupiah($kembalian); ?></span>
            </div>
            
            <?php if ($kembalian < 0): ?>
            <div class="result-item" style="color: #e74c3c; font-weight: bold;">
                <span>Uang tidak cukup! Kurang:</span>
                <span><?php echo formatRupiah(abs($kembalian)); ?></span>
            </div>
            <?php endif; ?>
        </div>
        
        <?php } ?>
    </div>
</body>
</html>