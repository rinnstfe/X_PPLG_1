<?php

$a = "Airin"; // variable
echo $a; // menampilkan
echo "<br>";

class Mobil{
    // access modifier
    // variable = attribute
    public $merk = "Ferrari";

    // function = methods
    function jalan($move){
        return $move;
    }
}

// instansiasi = instance
$a = new Mobil;

//object
echo $a -> merk;
echo "<br>";
echo $a -> jalan("jalan ke kanan");

?>