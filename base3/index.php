<?php

// menyambungkan database dengan php
$db = mysqli_connect(
    "localhost", // ip hosting
    "root", // username
    "", // password
    "x_pplg_1" // db name
);

// calling object
if ($db->connect_errno == 0){
    echo "databasenya sudah terhubung";
}else{
    echo "databasenya bermasalah";
}

?>