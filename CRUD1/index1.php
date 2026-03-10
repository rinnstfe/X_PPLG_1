<?php include 'fungsi1.php'; ?>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <h1>Keranjang Buah</h1>
    <form action="" method="get">
        <label for="">Nama buah</label>
        <input type="text" name="buah">
        <input type="submit" name="dor" value="Kirim">
    </form> 
    <a href="index1.php">
        <button>
            Bersihkan
        </button>
    </a>
    <hr>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama buah</th>
            <th colspan="2">Aksi</th>
        </tr>
    <?php 
    $num = 1;
    foreach(tampil() as $z){
    ?>
    <tr>
        <td><?= $num; ?></td>
        <td><?= $z['nama']; ?></td>
        <td><a href="hapus.php?id_buah=<?= $z['id_buah']; ?>">Hapus</a></td>
        <td><a href="rubah.php?id_buah=<?= $z['id_buah']; ?>">Rubah</a></td>
    </tr>
    <?php
    $num++;
    } ?>
    </table>
</body>
</html>