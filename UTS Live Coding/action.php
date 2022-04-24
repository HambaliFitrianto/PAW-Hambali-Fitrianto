<?php
include "koneksi.php";

$nama = addslashes($_POST['nama_hambali']);
$email = $_POST['email_hambali'];
$alamat = $_POST['alamat_hambali'];

$sql = "INSERT INTO tbl_hambali VALUES(null,'$nama','$email','$alamat')";
$hasil =mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "<script>
    alert('Tambah Data Gagal');
    document.location='form_data.php';
    </script>";
}else{
    echo "<script>
    alert('Tambah Data Berhasil');
    document.location='data.php';
    </script>";
}

?>