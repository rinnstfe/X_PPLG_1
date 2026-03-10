<?php include 'process.php'; ?>

<html>
    <head>
        <title>OOP Sederhana</title>
    </head>
    <body>
        <h1>Nama = <?= $cek->tampil_nama("nama"); ?></h1>
        <hr>
        <form action="" method="get">
            <label for="">Masukkan Nama</label>
            <input type="text" name="nama">
            <br>
            <label for="">Masukkan Umur</label>
            <input type="text" name="umur">
            <br>
            <label for="">Masukkan Jenis Kelamin</label>
            <input type="text" name="jk">
            <br>
            <input type="submit" value="Kirim">
            <a href="index2.php">
                <button>Bersihkan</button>
            </a>
        </form>
    </body>
</html> 