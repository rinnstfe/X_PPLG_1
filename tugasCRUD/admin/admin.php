<?php include 'adminfunc.php'; ?>
<html>
<head>
    <title>Ticketing Bioskop Editor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Ticketing Bioskop Editor</h1>

    <form action="" method="get">
        <label>Nama Film</label>
        <input type="text" name="nama">

        <label>Mulai Tayang</label>
        <input type="time" name="mulai">

        <label>Selesai Tayang</label>
        <input type="time" name="selesai">

        <input type="submit" name="dor" value="Kirim">
    </form>

    <a href="admin.php">
        <button>Bersihkan</button>
    </a>

    <hr>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Film</th>
            <th>Mulai Tayang</th>
            <th>Selesai Tayang</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php 
        $num = 1;
        foreach(tampil() as $z){
        ?>
        <tr>
            <td><?= $num; ?></td>
            <td><?= $z['nama']; ?></td>
            <td><?= $z['mulai']; ?></td>
            <td><?= $z['selesai']; ?></td>
            <td><a href="hapus.php?no_film=<?= $z['no_film']; ?>">Hapus</a></td>
            <td><a href="rubah.php?no_film=<?= $z['no_film']; ?>">Rubah</a></td>
        </tr>
        <?php
        $num++;
        } ?>
    </table>
</body>
</html>