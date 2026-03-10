<!-- How to use looping for, for list -->

<?php

// syntax = tata cara coding yang benar
// for (start from, rules, step)

// cara operator assignment
// variabel =  variabel + berapa
// variabel += berapa
// variabel++ (khusus untuk 1 saja)

$cerah = ["merah", "kuning", "biru"];
$gelap = ["hitam", "coklat", "dongker"];

$jadwal = [
    "no" => 1,
    "nama_guru" => "Pak Geza",
    "mata_pelajaran" => "BK",
    "hari" => "Kamis"
];

// cara panggil tipe data map   
echo $jadwal['mata_pelajaran'], "<br>";

for ($a = 1; $a < 6; $a+=1){
    echo $a;
    echo "<br>";
}

?>