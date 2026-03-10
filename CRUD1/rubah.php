<?php include 'fungsi1.php'; 

// mengambil idnya
$id = cek_data("id_buah");

// cari identias
$query = "SELECT * FROM keranjang WHERE id_buah = '$id'";

// menyambungkan sql dengan PHP
$data = mysqli_query(db(), $query);

// mengambil nama
$nama = mysqli_fetch_assoc($data);

?>

<html>
    <head>
        <title>Rubah</title>
    </head>
    <body>
        <h1>Update Data</h1>
        <form action="" method="get">
            <label>Buah Terbaru</label>
            <input type="hidden" name="id_buah_upt" value="<?= cek_data("id_buah"); ?>">
            <input type="text" name="buah_upt" placeholder="<?= $nama['nama']; ?>">
            <input type="submit" name="dor" value="rubah">
        </form>
    </body>
</html>