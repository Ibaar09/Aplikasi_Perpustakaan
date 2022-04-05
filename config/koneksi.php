<?php

//mysql -u root -p
$host = "localhost";
$user = "root";
$pass = "";
$db = "perpustakaan_Ibaar";

$db = mysqli_connect($host,$user,$pass,$db);

if (!$db) {
    die("database tidak terhubung");
}
 