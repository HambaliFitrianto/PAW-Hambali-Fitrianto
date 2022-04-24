<?php
include 'koneksi.php';
$id=$_GET['id'];

$sql="DELETE FROM tbl_hambali WHERE id_hambali=$id";
$hasil=mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "<script>
    alert('Delete Data Gagal');
    document.location='data.php';
    </script>";
}else{
    echo "<script>
    alert('Delete Data Berhasil');
    document.location='data.php';
    </script>";
}

?>