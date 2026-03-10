<?php
include 'connect.php';

$data = mysqli_query(
    $db,
    "SELECT * FROM jadwal"
);  

// tipe data list 1 dimensi
// $jadwal = ["bindo", "agama", "ipas", "pjok", "bing"];
// echo $jadwal[0];

// list multidimensional
$buah = [
    ["kiwi", "alpukat", "melon"],
    ["pir", "rambutan", "duku"]
];

echo $buah[0][0];
echo "<br>";
echo $buah [0][2];
echo "<br>";
echo $buah [1][1];

for ($a = 0; $a <= 2; $a++){
echo $a;
echo "<br>";
}

?>