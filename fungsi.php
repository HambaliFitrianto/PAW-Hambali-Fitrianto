<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fungsi</title>
    <style>
        body {
            text-align: center;
            background-color: lightblue;
        }
    </style>
</head>
<body>
    <h1>Tugas 2</h1>
    <p><b>Soal Nomer 3</b></p>
    <?php
    //nama
    function namaSaya(){
        echo "Hambali Fitrianto</br>200411100074</br>";
    }
    namaSaya();

    //umur 
    function menghitungUmurSaya($tahunLahir, $tahunSekarang){
        $umurSaya = $tahunSekarang - $tahunLahir;
        return $umurSaya;
    }
    echo "Umur Saya Adalah :". menghitungUmurSaya(2001, 2022). "Tahun</br></br>";

    //penjumlahan
    function perkalian ($a1, $a2){
        $x = $a1;
        $y = $a2;
        $hasilPenjumlahan = $x + $y;
        return $hasilPenjumlahan;
    } 
    $hasilPenjumlahan = perkalian(50,50);
    echo "penjumlahan dari 50 x 50 adalah $hasilPenjumlahan </br>";
    ?>
</body>
</html>