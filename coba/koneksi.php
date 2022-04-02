<?php
$host = "localhost";
$user ="root";
$password ="";
$dbname ="hambali";

$koneksi = mysqli_connect($host,$user,$password,$dbname);
if(!$koneksi){
    echo "koneksi gagal";
}
?>