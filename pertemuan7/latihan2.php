<?php
// Cek apakah tidak ada data di $_GET

if ( !isset($_GET["nama_BahanKimia"]) ||
     !isset($_GET["Gambar"]) ||
     !isset($_GET["jenis"]) ||
     !isset($_GET["Merk"]) ||
     !isset($_GET["KlasifikasiBahaya"])) {
    // rederict
    header("Location: Latihan1.php");
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <li><img src="<?= $_GET['Gambar']; ?>" height="100" width="100"></li>
        <li><?=  $_GET["nama"];?></li>
        <li><?= $_GET["jenis"];?></li>
        <li><?= $_GET["Merk"]; ?></li>
        <li><?= $_GET["KlasifikasiBahaya"]?></li>
    </ul>

    <a href="latihan1.php">Kembali Kehalaman Sebelumnya</a>

</body>
</html>