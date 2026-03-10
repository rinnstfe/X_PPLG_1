<?php
function cek_data($data){
    if(isset($_GET[$data]) == true){
        return $_GET[$data];
    }else{
        return "Data tidak ada";
    }
}
?>
<html>
    <head>
        <title>USK Pass Test</title>
        <style>
            .bapak{
                display: flex;
                flex-direction: column;
                gap: 5px;
            }
            
            .nama, .nilai, .lulus{
                display: flex;
                gap: 5px;
                padding: 5px;
            }
        </style>
    </head>
    <body>
        <!-- Siapkan 2 input -->
        <!-- 1. Input Nama -->
        <!-- 2. Input Nilai -->
        <!-- KKTP = 80 atau lebih -->
        <h1><?php echo cek_data('nama');?></h1>
        <h1><?php
        if (cek_data('nilai') == "Data tidak ada"){
            echo "Data tidak a               da";
        }
        else if (cek_data('nilai') >= 80){
            if (cek_data('nilai') > 100){
                echo "LAH KOCAK! Nilai Anda adalah ";
                echo cek_data('nilai');
            }else{
                echo "LULUS! Nilai Anda adalah ";
                echo cek_data('nilai');
            }
        }else{
            echo "TIDAK LULUS! Nilai Anda adalah ";
            echo cek_data('nilai');
        }
        ?></h1>
        <hr>
        <form action="" method="GET">
            <div class="bapak">
                <div class="nama">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama">
                </div>

                <div class="nilai">
                    <label>Nilai</label>
                    <input type="number" name="nilai">
                </div>

                <div class="lulus">
                    <input type="submit" value="Cek Lulus">
                </div>
                </div>
        </form>
    </body>
</html>