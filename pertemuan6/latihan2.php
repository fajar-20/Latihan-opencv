<?php 


// Array Associative
//  definisnya sama sepertti array numerik, kecuali
// key-nya adalah string yang kitabuat sendiri

$data_BahanKimia = [
    
[   
    "Gambar" => "https://d2cbg94ubxgsnp.cloudfront.net/Pictures/2000xAny/2/5/8/144258_shutterstock_1320679391.jpg",
    "nama_BahanKimia" => "Hydrochloric acid",
    "jenis" => "Cair",
    "Merk" => "Merck",
    "KlasifikasiBahaya" => "Beracun, Mudah Terbakar"  
],
[
    "Gambar" => "https://bpdmah.com/wp-content/uploads/2022/01/sulfuric-acid-3.jpg",
    "nama_BahanKimia" => "Sulfuric Acid",
    "jenis" => "Cair",
    "Merk" => "Sigma-Aldrich",
    "KlasifikasiBahaya" => "Korosif, Berbahaya" 

],
[
    "Gambar" => "https://bpdmah.com/wp-content/uploads/2022/01/sulfuric-acid-3.jpg",
    "nama_BahanKimia" => "Sulfuric Acid",
    "jenis" => "Cair",
    "Merk" => "Sigma-Aldrich",
    "KlasifikasiBahaya" => "Korosif, Berbahaya" 
],
[
    "Gambar" => "https://bpdmah.com/wp-content/uploads/2022/01/sulfuric-acid-3.jpg",
    "nama_BahanKimia" => "Sodium Hydroxide",
    "jenis" => "Padat",
    "Merk" => "Merck",
    "KlasifikasiBahaya" => "Korosif"
],
[
    "Gambar" => "https://bpdmah.com/wp-content/uploads/2022/01/sulfuric-acid-3.jpg",
    "nama_BahanKimia" => "Acetone",
    "jenis" => "Cair",
    "Merk" => "Merck",
    "KlasifikasiBahaya" => "Mudah Terbakar, Berbahaya"
]

];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>
    <?php foreach($data_BahanKimia as $Bkmia) : ?>
        <ul>
            <li>
                <img src="<?= $Bkmia['Gambar']; ?>"width="100" height="100">
            </li>
            <li>Nama Bahan Kimia :<?=  $Bkmia["nama_BahanKimia"]; ?></li>
            <li>Jenis : <?=  $Bkmia["jenis"]; ?></li>
            <li>Merek : <?=  $Bkmia["Merk"]; ?></li>
            <li> Klasifikasi Bahaya : <?=  $Bkmia["KlasifikasiBahaya"]; ?></li>
        </ul>
    <?php endforeach; ?>
    
</body>
</html>