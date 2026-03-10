<?php 
include 'adminfunc.php'; 

$no = cek_data("no_film");

$query = "SELECT * FROM ticketing WHERE no_film = '$no'";
$data = mysqli_query(db(), $query);
$film = mysqli_fetch_assoc($data);
?>

<html>
<head>
    <title>Rubah</title>
</head>
<body>
    <h1>Update Data</h1>

    <form action="" method="get">
        <input type="hidden" name="no_film_upt" value="<?= $film['no_film']; ?>">

        <label>Nama Film Baru</label>
        <input type="text" name="film_upt" value="<?= $film['nama']; ?>">

        <label>Mulai Tayang Baru</label>
        <input type="time" name="mulai_upt" value="<?= $film['mulai']; ?>">

        <label>Selesai Tayang Baru</label>
        <input type="time" name="selesai_upt" value="<?= $film['selesai']; ?>">

        <input type="submit" name="dor" value="Rubah">
    </form>

</body>
</html>