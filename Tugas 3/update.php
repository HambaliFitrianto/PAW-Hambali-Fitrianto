<?php
include "koneksi.php";

$id = $_POST['Id_Mahasiswa'];
$nim = $_POST['Nim_Mahasiswa'];
$nama = addslashes($_POST['Nama_Mahasiswa']);
$alamat = $_POST['Alamat_Mahasiswa'];

$sql = "UPDATE tbl_074 set  Nim_Mahasiswa='$nim', Nama_Mahasiswa = '$nama', Alamat_Mahasiswa='$alamat' where Id_Mahasiswa=$id";
$hasil =mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Update data mahasiswa gagal";
}else{
    echo "Update data mahasiswa berhasil<br>";
    echo "<a href='data_mahasiswa.php'>Show data</a>";
}

?>