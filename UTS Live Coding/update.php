<?php
include "koneksi.php";

$id = $_POST['id'];
$nama = addslashes($_POST['nama_hambali']);
$email = $_POST['email_hambali'];
$alamat = $_POST['alamat_hambali'];

$sql = "UPDATE tbl_hambali set nama_hambali = '$nama', email_hambali='$email', alamat_hambali='$alamat' where id_hambali=$id";
$hasil =mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "<script>
    alert('Update Data Gagal');
    document.location='form_edit.php';
    </script>";
}else{
    echo "<script>
    alert('Update Data Berhasil');
    document.location='data.php';
    </script>";
}

?>