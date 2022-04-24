<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Form Edit Data</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>

<body>
    <nav class="navbar navbar-light bg-white fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h1 class="offcanvas-title" id="offcanvasNavbarLabel">Demo <span
                            class="font-weight-bold text-primary">UTS</span></h1>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="tampilan_awal.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Data
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                <li><a class="dropdown-item" href="form_data.php">Tambah Data</a>
                                </li>
                                <li><a class="dropdown-item" href="data.php">Data</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <?php
        include 'koneksi.php';
        
        $id=$_GET['id'];
        $sql = "SELECT * FROM tbl_hambali where id_hambali=$id";
        $hasil = mysqli_query($koneksi, $sql);
        if (!$hasil){
            echo "query salah";
        }
        ?>
    <?php
        while ($row = mysqli_fetch_array($hasil))
        {
            ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="mt-5">
                    <h1 class="text-center">Update <span class="font-weight-bold text-primary">DATA</span>
                    </h1>
                </div>
                <div class="card-body">
                    <form action="update.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['id_hambali']?>">
                        <div class="form-group mb-3">
                            <input type="text" name="nama_hambali" class="form-control" placeholder="Nama"
                                required="required" value="<?php echo $row['nama_hambali']?>">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" name="email_hambali" class="form-control" placeholder="Email"
                                required="required" value="<?php echo $row['email_hambali']?>">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" name="alamat_hambali" class="form-control" placeholder="Alamat"
                                required="required" value="<?php echo $row['alamat_hambali']?>">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>