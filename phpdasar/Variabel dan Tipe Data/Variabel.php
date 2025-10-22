<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Diri - Petani Cokelat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #8B4513 0%, #D2691E 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
            padding: 40px;
            width: 100%;
            max-width: 600px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 8px;
            background: linear-gradient(to right, #8B4513, #D2691E);
        }
        
        .profile-header {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px;
        }
        
        .profile-icon {
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, #8B4513, #D2691E);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            box-shadow: 0 5px 15px rgba(139, 69, 19, 0.3);
        }
        
        .profile-icon i {
            font-size: 40px;
            color: white;
        }
        
        .profile-title h1 {
            color: #5D4037;
            font-size: 28px;
            margin-bottom: 5px;
            text-align: left;
        }
        
        .profile-title p {
            color: #8B4513;
            font-size: 16px;
            text-align: left;
        }
        
        .data-section {
            background-color: #FFF8F0;
            border-radius: 12px;
            padding: 25px;
            margin: 25px 0;
            border-left: 5px solid #D2691E;
            text-align: left;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .data-section h2 {
            color: #5D4037;
            margin-bottom: 20px;
            font-size: 22px;
            display: flex;
            align-items: center;
        }
        
        .data-section h2 i {
            margin-right: 10px;
            color: #8B4513;
        }
        
        .data-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        
        .data-item:hover {
            background-color: rgba(210, 105, 30, 0.1);
            transform: translateX(5px);
        }
        
        .data-icon {
            width: 40px;
            height: 40px;
            background-color: #8B4513;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
        }
        
        .data-icon i {
            color: white;
            font-size: 18px;
        }
        
        .data-content {
            flex: 1;
        }
        
        .data-label {
            font-size: 14px;
            color: #795548;
            margin-bottom: 3px;
        }
        
        .data-value {
            font-size: 18px;
            color: #5D4037;
            font-weight: bold;
        }
        
        .additional-info {
            background-color: #F5F5F5;
            border-radius: 10px;
            padding: 20px;
            margin-top: 25px;
            text-align: left;
        }
        
        .additional-info h3 {
            color: #5D4037;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }
        
        .additional-info h3 i {
            margin-right: 8px;
            color: #8B4513;
        }
        
        .additional-info p {
            color: #795548;
            line-height: 1.6;
        }
        
        .footer {
            margin-top: 30px;
            color: #A1887F;
            font-size: 14px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .social-icons {
            display: flex;
            gap: 15px;
        }
        
        .social-icons a {
            color: #8B4513;
            font-size: 18px;
            transition: all 0.3s ease;
        }
        
        .social-icons a:hover {
            color: #5D4037;
            transform: translateY(-3px);
        }
        
        @media (max-width: 600px) {
            .container {
                padding: 25px;
            }
            
            .profile-header {
                flex-direction: column;
                text-align: center;
            }
            
            .profile-icon {
                margin-right: 0;
                margin-bottom: 15px;
            }
            
            .profile-title h1,
            .profile-title p {
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="profile-header">
            <div class="profile-icon">
                <i class="fas fa-user"></i>
            </div>
            <div class="profile-title">
                <h1>Data Diri</h1>
                <p>Informasi Pribadi</p>
            </div>
        </div>
        
        <div class="data-section">
            <h2><i class="fas fa-info-circle"></i> Informasi Umum</h2>
            
            <?php
            $nama = "Petani_Cokelat";
            $umur = 16;
            $tinggi = 171.5;
            ?>
            
            <div class="data-item">
                <div class="data-icon">
                    <i class="fas fa-signature"></i>
                </div>
                <div class="data-content">
                    <div class="data-label">Nama Lengkap</div>
                    <div class="data-value"><?php echo $nama; ?></div>
                </div>
            </div>
            
            <div class="data-item">
                <div class="data-icon">
                    <i class="fas fa-birthday-cake"></i>
                </div>
                <div class="data-content">
                    <div class="data-label">Usia</div>
                    <div class="data-value"><?php echo $umur; ?> tahun</div>
                </div>
            </div>
            
            <div class="data-item">
                <div class="data-icon">
                    <i class="fas fa-ruler-vertical"></i>
                </div>
                <div class="data-content">
                    <div class="data-label">Tinggi Badan</div>
                    <div class="data-value"><?php echo $tinggi; ?> cm</div>
                </div>
            </div>
        </div>
        
        <div class="additional-info">
            <h3><i class="fas fa-user-check"></i> Tentang Saya</h3>
            <p>Saya adalah seorang pelajar berusia <?php echo $umur; ?> tahun dengan tinggi <?php echo $tinggi; ?> cm. Nama saya <?php echo $nama; ?> dan saya memiliki ketertarikan dalam bidang teknologi dan pemrograman.</p>
        </div>
        
        <div class="footer">
            <div>© 2023 Data Diri</div>
            <div class="social-icons">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
            </div>
        </div>
    </div>
</body>
</html>