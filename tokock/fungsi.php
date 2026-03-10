<?php

function cek_data($data){
    if(isset($_POST[$data]) == true){
        if($_POST[$data] == NULL){
            return 0;
        }else{
            return $_POST[$data];
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

function tambah($username, $password, $email){
    $query = "INSERT INTO user_toko VALUES(NULL, '$username', '$password', '$email')";
    mysqli_query(db(), $query);
    ?>
    <script>
        alert("Akun telah ditambah!!");
    </script>
    <?php
}

$dor = cek_data("dor");

if($dor == "Daftar"){
    tambah(
        cek_data("user"),
        cek_data("pass"),
        cek_data("email")
    );
}

?>