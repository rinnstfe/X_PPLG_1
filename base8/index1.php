<?php include 'sistim.php'; ?>
<html>
    <head>
        <title>Kalkulator Luas Persegi</title>
    </head>
    <body>
        <h1>Sisi = <?= cek_data("sisi"); ?> </h1>
        <h1>Luas = <?= luas_persegi("sisi"); ?> </h1>
        <hr>
        <form action="" method="get">
            <label for="">Sisi</label>
            <input type="number" name="sisi">
            <br>
            <input type="submit" value="Jumlahkan">
        </form>
    </body>
</html>