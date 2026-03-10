<?php
// $a = 9;
// ternary operator
// echo ($a == 10) ? "Angka Sepuluh" : "Bukan Angka Sepuluh!";
// if($a == 10){
//     echo "Angka Sepuluh!";
// }else{
//     echo "Bukan Angka Sepuluh!";
// }

$rp = $dl = $bt = $yn = 0;

function cek_data($data){
    return (isset($_GET[$data]) == TRUE) ? ($_GET[$data] == NULL) ? 0 : $_GET[$data] : 0;
}

//fungsi
function konversi_rp($rupiah){
    global $rp, $dl, $bt, $yn;
    $rp = $rupiah;
    $dl = $rupiah * 0.000059;
    $bt = $rupiah * 0.0018;
    $yn = $rupiah * 0.0093;
}

function konversi_dollar($dollar){
    global $rp, $dl, $bt, $yn;
    $rp = $dollar * 16.980;
    $dl = $dollar;
    $bt = $dollar * 31.18;
    $yn = $dollar * 158.03;
}

function konversi_baht($baht){
    global $rp, $dl, $bt, $yn;
    $rp = $baht * 544.5799;
    $dl = $baht * 0.03207;
    $bt = $baht;
    $yn = $baht * 5.0683;
}

function konversi_yen($yen){
    global $rp, $dl, $bt, $yn;
    $rp = $yen * 107.448;
    $dl = $yen * 0.006328;
    $bt = $yen * 0.1973;
    $yn = $yen;
}

// logika

if(cek_data("hasil") == "Rp"){
    konversi_rp(cek_data("rupiah"));
}elseif(cek_data("hasil") == "$"){
    konversi_dollar(cek_data("dollar"));
}elseif(cek_data("hasil") == "฿"){
    konversi_baht(cek_data("baht"));
}elseif(cek_data("hasil") == "¥"){
    konversi_yen(cek_data("yen"));
}

?>