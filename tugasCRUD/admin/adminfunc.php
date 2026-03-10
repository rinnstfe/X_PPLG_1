<?php

function cek_data($data){
    if(isset($_GET[$data]) && $_GET[$data] != ""){
        return $_GET[$data];
    }
    return null;
}

function db(){
    $koneksi = mysqli_connect("localhost","root","","bioskop");

    if(mysqli_connect_errno()){
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    return $koneksi;
}

function tampil(){
    $query = "SELECT * FROM ticketing";
    return mysqli_query(db(), $query);
}

function tambah($nama, $mulai, $selesai){
    $query = "INSERT INTO ticketing VALUES(NULL, '$nama', '$mulai', '$selesai')";
    mysqli_query(db(), $query);

    echo "<script>
        alert('Data telah ditambah!');
        location.href='admin.php';
    </script>";
}

function rubah($no, $nama_baru, $mulai_baru, $selesai_baru){
    $query = "UPDATE ticketing 
            SET nama='$nama_baru', mulai='$mulai_baru', selesai='$selesai_baru'
            WHERE no_film='$no'";
    mysqli_query(db(), $query);

    echo "<script>
        alert('Data telah dirubah!');
        location.href='admin.php';
    </script>";
}

if(cek_data("dor") == "Kirim"){
    tambah(cek_data("nama"), cek_data("mulai"), cek_data("selesai"));
}
else if(cek_data("dor") == "Rubah"){
    rubah(
        cek_data("no_film_upt"),
        cek_data("film_upt"),
        cek_data("mulai_upt"),
        cek_data("selesai_upt")
    );
}
?>