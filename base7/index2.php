<?php
function angka(){
    echo 17; // echo itu menampilkan
}

function angka1(){
    return 17; // return itu berisi 17 (ada nilainya, bukan ditampilkan)
}

$umur = 17;
// angka1 jadi variabel yang isinya 17 (awalnya fungsi, jadi kayak variabel berkedok fungsi karena adanya return)
if (angka1() >= 17){
    echo "Punya KTP";
}else{
    echo "Tidak punya KTP";
}

function cek_data($target){
    if(isset($_GET[$target]) == true){
        echo $_GET[$target];
    }else{
        echo "Data belum ada!";
    }
}
?>
<html>
    <head>
        <title>Function Isset</title>
    </head>
    <body>
        <h1>Isset</h1>
        <h3>isset = apakah sudah di set?</h3>
        <hr>
        <h1><?php cek_data('nama'); ?></h1>
        <h1><?php cek_data('umur'); ?></h1>
        <hr>
        <form action="" method="get">
            <label>Nama</label>
            <input type="text" name="nama">
            <label>Umur</label>
            <input type="number" name="umur">
            <input type="submit" value="Kirim">
        </form>
    </body>
</html>