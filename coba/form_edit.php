<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <?php
 include 'koneksi.php';
 
 $id=$_GET['id'];
$sql = "SELECT * FROM tbl_074 where Id_Mahasiswa=$id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "query salah";
}

?>

    <h1>Form Edit Mahasiswa</h1>
    <?php
while ($row = mysqli_fetch_array($hasil))
{
?>
    <form method="post" action="update.php">
        <input type="hidden" name="Id_Mahasiswa" value="<?php echo $row['Id_Mahasiswa']?>">
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nim Mahasiswa : </label>
            <input type="text" name="Nim_Mahasiswa" class="form-control" id="exampleInputPassword1"
                value="<?php echo $row['Nim_Mahasiswa']?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nama Mahasiswa : </label>
            <input type="text" name="Nama_Mahasiswa" class="form-control" id="exampleInputPassword1"
                value="<?php echo $row['Nama_Mahasiswa']?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Alamat Mahasiswa : </label>
            <input type="text" name="Alamat_Mahasiswa" class="form-control" id="exampleInputPassword1"
                value="<?php echo $row['Alamat_Mahasiswa']?>">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    <?php }?>
</body>

</html>