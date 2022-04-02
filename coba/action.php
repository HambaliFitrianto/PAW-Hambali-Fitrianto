<?php
include "koneksi.php";

$nim = $_POST['Nim_Mahasiswa'];
$nama = addslashes($_POST['Nama_Mahasiswa']);
$alamat = $_POST['Alamat_Mahasiswa'];

$sql = "INSERT INTO tbl_074 VALUES(null,'$nim','$nama','$alamat')";
$hasil =mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Tambah data mahasiswa gagal";
}else{
    echo "Tambah data mahasiswa berhasil<br>";
    echo "<a href='data_mahasiswa.php'>Show data</a>";
}

?>