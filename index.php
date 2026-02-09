<?php
require 'functions.php';

// amnil data dari tabel mahasiswa / query data mahasiswa
$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

<h1>Daftar Mahasiswa</h1>

<button onclick="window.location.href='tambah.php'">Tambah Data Mahasiswa</button>
<br><br>

<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>
    <?php  $i = 1; ?>
    <?php foreach( $mahasiswa as $rows ) : ?>
    <tr>
        <td><?= $i++ ?></td>
        <td>
            <a href="">Ubah</a> | 
            <a href="">Hapus</a>
        </td>
        <td><img src="img/<?= $rows["gambar"] ?>" width="50" height="50" ></td>
        <td><?= $rows["nrp"] ?></td>
        <td><?= $rows["nama"] ?></td>
        <td><?= $rows["email"] ?></td>
        <td><?= $rows["jurusan"] ?></td>
    </tr>
    <?php endforeach; ?>

</table>
    
</body>
</html>