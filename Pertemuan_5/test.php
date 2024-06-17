<!-- tag pembuka -->
<?php

    // menampilkan tulisan
    echo "HAIIII HIHIHI";

    // membuat variabel gaharus innisialisasi tipe data

    // // coba cek klo kondisi salah
    // $nama_kucing = "Chika";

    // //klo salah semua
    // $nama_mahasiswa = "Ula"; 
    // $nama_kucing = "Uli";

    $nama_mahasiswa = "Agung"; 
    $nama_kucing = "Ucrit"; 
    echo "<br>" . $nama_mahasiswa . " wiwiiwiwi"; 
    // bisa menambhakan tag html tpi hrs berada di string echo

    // bisa membuat dokumen php  didalam html

    // menggunakan percabangan/desicion/kondisional
    if($nama_mahasiswa == "Agung") {
        $jenis_hewan = "Bukan Kucing";
    } else if($nama_kucing == "Ucrit"){
        $jenis_hewan = "Kucing";
    }else $jenis_hewan = "??";

    // menambahkan output
    echo "<br>" . $jenis_hewan . "";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br> Calon abang-abang TU
</body>
</html>