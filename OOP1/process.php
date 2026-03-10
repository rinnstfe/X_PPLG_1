<?php

class Ambil{
    function cek_data($data){
        if(isset($_GET[$data]) == TRUE){
            if($_GET[$data] == NULL){
                return 0;
            }else{
                return $_GET[$data];
            }
        }else{
            return 0;
        }
    }

    function tampil_nama($nama){
        return $this->cek_data($nama);
    }

    function tampil_umur($umur){
        return $this->cek_data($umur);
    }

    function tampil_jk($jk){
        return $this->cek_data($jk);
    }
}

$cek = new Ambil;

?>