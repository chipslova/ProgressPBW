<?php

    include "koneksi.php";

    //ambil inputan
        $nama_mhs = $_POST['nama'];
        $prodi_mhs = $_POST['prodi'];
        $ulang = $_POST['loop'];
    
        $proses = mysqli_query($koneksi, "INSERT INTO mahasiswa (nama_mahasiswa, prodi) VALUES ('".$nama_mhs."', '".$prodi_mhs."')")
        or die (mysqli_error($koneksi));

        if($proses){
            echo "
                <script>
                alert('Data Berhasil Disimpan');
                window.location.href='test5.php';
                </script>"; 
        } else echo "
                <script>
                alert('Data Gagal Disimpan');
                window.location.href='test5.php';
                </script>";

    // if($nilaimhs != ""){
    //     if($nilaimhs >= 85){
    //         $huruf = 'A';
    //     }elseif($nilaimhs >= 75){
    //         $huruf = 'B';
    //     }elseif($nilaimhs >= 65){
    //         $huruf = 'C';
    //     }else{
    //         $huruf = 'D';
    //     }

    //     for($x=0; $x<=$ulang; $x++){
    //         echo $npmmhs . " Nilai mata kuliah anda : " . $huruf . "<br>";
    //         //echo "<script> alert ('". $npmmhs . "Nilai mata kuliah anda : " . $huruf . "')</script>";
    //     }
    // }
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="test5.php">Kembali</a>
</body>
</html> -->