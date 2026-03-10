<?php
function db(){
    $koneksi = mysqli_connect("localhost","root","","bioskop");

    if(mysqli_connect_errno()){
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    return $koneksi;
}

function getMovies(){
    $query = "SELECT * FROM ticketing";
    return mysqli_query(db(), $query);
}
?>