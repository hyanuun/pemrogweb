<?php

require 'functions.php';


//ambil npm dari url
$npm = $_GET['npm'];

//query mahasiswa berdasarkan npm
$mhs = query("SELECT * FROM mahasiswa WHERE npm = $npm");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DETAIL MAHASISWA</title>
</head>

<body>
  <h3>Detail Mahasiswa</h3>
  <ul>
    <li>NPM : <?= $mhs['npm']; ?></li>
    <li>Nama : <?= $mhs['nama']; ?></li>
    <li>Alamat : <?= $mhs['alamat']; ?></li>
    <li>Agama : <?= $mhs['agama']; ?></li>
    <li><img src="img/<?= $mhs['gambar']; ?>"></li>
    <li><a href="">ubah</a> | <a href="">hapus</a></li>
    <li><a href="latihan3.php">Kembali ke Daftar Mahasiswa</a></li>
  </ul>
</body>

</html>