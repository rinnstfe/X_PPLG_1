<?php
function cek_data($data){
    if(isset($_GET[$data]) == true){
        return $_GET[$data];
    }else{
        return 0;
    }
}

function hasil($a, $b){
    if(cek_data("dor") == "Tambah"){
        return cek_data($a) + cek_data($b);
    }else if(cek_data("dor") == "Kurang"){
        return cek_data($a) - cek_data($b);
    }else if(cek_data("dor") == "Kali"){
        return cek_data($a) * cek_data($b);
    }else if(cek_data("dor") == "Bagi"){
        return cek_data($a) / cek_data($b);
    }
}

?>
<html>
    <head>
        <title>Calculator</title>
    </head>
    <body>
        <h1>Angka 1 = <?php echo cek_data("angka1") ?></h1>
        <h1>Angka 2 = <?php echo cek_data("angka2") ?></h1>
        <h1>Hasil = <?php echo hasil("angka1", "angka2") ?></h1>
        <hr>
        <form action="" method="get">
            <label>Angka Pertama</label>
            <input type="number" name="angka1">
            <label>Angka Kedua</label>
            <input type="number" name="angka2">
            <input type="submit" name = "dor" value="Tambah">
            <input type="submit" name = "dor" value="Kurang">
            <input type="submit" name = "dor" value="Kali">
            <input type="submit" name = "dor" value="Bagi">
        </form>
    </body>
</html>