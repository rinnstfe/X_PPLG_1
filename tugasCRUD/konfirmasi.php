<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pesanan</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .konfirmasi-box {
            background-color: #333;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            max-width: 400px;
            margin: 50px auto;
        }
        .btn-kembali {
            display: inline-block;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <header>
        <h1>🎬 CKTC Cinema</h1>
    </header>

    <div class="container">
        <div class="konfirmasi-box">
            <h2>Pemesanan Berhasil!</h2>
            <p>Terima kasih telah memesan tiket.</p>
            <p><strong>Film:</strong> <?php echo htmlspecialchars($_GET['film'] ?? '-'); ?></p>
            <p><strong>Jam:</strong> <?php echo htmlspecialchars($_GET['jam'] ?? '-'); ?></p>
            <p>Silakan datang ke loket untuk mengambil tiket.</p>
            
            <a href="user.php" class="btn-kembali">Kembali ke Daftar Film</a>
        </div>
    </div>
</body>
</html>