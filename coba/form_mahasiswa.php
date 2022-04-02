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
    <h1>Form Tambah Mahasiswa</h1>
    <form method="post" action="action.php">
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nim Mahasiswa : </label>
            <input type="text" name="Nim_Mahasiswa" class="form-control" id="exampleInputPassword1"
                placeholder="Masukkan Nim" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nama Mahasiswa : </label>
            <input type="text" name="Nama_Mahasiswa" class="form-control" id="exampleInputPassword1"
                placeholder="Masukkan Nama" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Alamat Mahasiswa : </label>
            <input type="text" name="Alamat_Mahasiswa" class="form-control" id="exampleInputPassword1"
                placeholder="Masukkan Alamat" required>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
        <button type="reset" class="btn btn-danger">Reset</button>
    </form>

</body>

</html>