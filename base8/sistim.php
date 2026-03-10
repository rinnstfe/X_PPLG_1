<?php

function cek_data($data){
    if(isset($_GET[$data]) == true){
        if($_GET[$data] == NULL){
            return 0;
        }else{
            return $_GET[$data];;
        }
    }else{
        return 0;
    }
}

function luas_persegi($sisi){
    return cek_data($sisi) * cek_data($sisi);
}

function luas_lingkaran($jarijari){
    return pi() * (cek_data($jarijari) * cek_data($jarijari));
}

function luas_segitiga($alas, $tinggi){
    return (cek_data($alas) * cek_data($tinggi)) / 2;
}

?>