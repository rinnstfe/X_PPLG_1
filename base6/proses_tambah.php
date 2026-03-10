<?php

include 'db.php';

$no = $_GET['no'];
$nama = $_GET['nama'];
$matpel = $_GET['matpel'];
$hari = $_GET['hari'];

$query = "INSERT INTO jadwal VALUES(
'$no',
'$nama',
'$matpel',
'$hari'
)";

$tambah = mysqli_query(
    $db,
    $query
);

header("location:index.php");

?>