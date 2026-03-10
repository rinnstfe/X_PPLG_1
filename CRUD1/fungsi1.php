<?php

function cek_data($data){
    if(isset($_GET[$data]) == true){
        if($_GET[$data] == NULL){
            return 0;
        }else{
            return $_GET[$data];
        }
    }else{
        return 0;
    }
}

function db(){
    $koneksi = mysqli_connect(
        "localhost",
        "root",
        "",
        "buah"
    );
    if($koneksi->connect_errno == 1){
        return $koneksi->connect_error;
    }else{
        return $koneksi;
    }
}

function tampil(){
    $query = "SELECT * FROM keranjang";
    // koneksinya, perintahnya
    $data = mysqli_query(db(), $query);
    return $data;
}

function tambah($data){
    $query = "INSERT INTO keranjang VALUES(NULL, '$data')";
    mysqli_query(db(),$query);
    ?>
    <script>
        alert("Data telah ditambah!!");
    </script>
    <?php
}

function rubah($id, $data_baru){
    $query = "UPDATE keranjang SET nama = '$data_baru' WHERE id_buah = '$id'";
    $data = mysqli_query(db(), $query);
    ?>
    <script>
        alert("Data telah dirubah!");
        location.href = "index1.php";
    </script>
    <?php
}

if(cek_data("dor") == "Kirim"){
    tambah(cek_data("buah"));
}else if(cek_data("dor") == "rubah"){
    rubah(cek_data("id_buah_upt"), cek_data("buah_upt"));
}

?>