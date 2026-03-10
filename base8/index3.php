<?php include 'sistim.php'; ?>
<html>
    <head>
        <title>Kalkulator Luas Segitiga</title>
    </head>
    <body>
        <h1>Alas = <?= cek_data("alas"); ?> </h1>
        <h1>Tinggi = <?= cek_data("tinggi"); ?> </h1>
        <h1>Luas = <?= luas_segitiga("alas", "tinggi"); ?> </h1>
        <hr>
        <form action="" method="get">
            <label for="">Alas</label>
            <input type="number" name="alas">
            <label for="">Tinggi</label>
            <input type="number" name="tinggi">
            <br>
            <input type="submit" value="Jumlahkan">
        </form>
    </body>
</html>