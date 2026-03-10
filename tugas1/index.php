<?php include 'kalkulasi.php'; ?>

<html>
    <head>
        <title>Konversi Mata Uang</title>
    </head>
    <body>
        <h1>Rp <?= $rp; ?></h1>
        <h1>$ <?= $dl; ?></h1>
        <h1>฿ <?= $bt; ?></h1>
        <h1>¥ <?= $yn; ?></h1>
        <hr>
        <form action="" method="GET">
            <label for="">Rupiah</label>
            <input type="number" name="rupiah">
            <input type="submit" name="hasil" value="Rp">
            <br>

            <label for="">Dollar</label>
            <input type="number" name="dollar">
            <input type="submit" name="hasil" value="$">
            <br>

            <label for="">Baht</label>
            <input type="number" name="baht">
            <input type="submit" name="hasil" value="฿">
            <br>

            <label for="">Yen</label>
            <input type="number" name="yen">
            <input type="submit" name="hasil" value="¥">
            <br>
        </form>
        <a href="index.php">
            <button>Bersihkan</button>
        </a>
    </body>
</html>