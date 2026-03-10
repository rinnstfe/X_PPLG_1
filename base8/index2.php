<?php include 'sistim.php'; ?>
<html>
    <head>
        <title>Kalkulator Luas Lingkaran</title>
    </head>
    <body>
        <h1>Jari-jari = <?= cek_data("jarijari"); ?> </h1>
        <h1>Luas = <?= luas_lingkaran("jarijari"); ?> </h1>
        <hr>
        <form action="" method="get">
            <label for="">Jari-jari</label>
            <input type="number" name="jarijari">
            <br>
            <input type="submit" value="Jumlahkan">
        </form>
    </body>
</html>