<?php
// SUPERGLOBALS
// varible global milik PHP
// merupakan array associative

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
    "Gambar" => "https://labmart.id/wp-content/uploads/2023/10/Jual-smartlab-ethanol-4l-harga-distributor-msds-jakarta.png",
    "nama_BahanKimia" => "Ethanol",
    "jenis" => "Cair",
    "Merk" => "Brataco",
    "KlasifikasiBahaya" => "Mudah Terbakar"
],
[
    "Gambar" => "https://tse4.mm.bing.net/th/id/OIP.AG0R_9KRMq8RNBja8VVFBQHaHa?rs=1&pid=ImgDetMain&o=7&rm=3",
    "nama_BahanKimia" => "Sodium Hydroxide",
    "jenis" => "Padat",
    "Merk" => "Merck",
    "KlasifikasiBahaya" => "Korosif"
],
[
    "Gambar" => "https://tse4.mm.bing.net/th/id/OIP.qPn0SMbo6xq3nE7jH1sjzAHaJk?rs=1&pid=ImgDetMain&o=7&rm=3",
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
    <title>GET</title>
</head>
<body>
<h1>DAFTAR BAHAN KIMIA</h1>
<ul>
<?php foreach($data_BahanKimia as $Bkimia) : ?>
    <li>
        <a href="latihan2.php?
        nama=<?= $Bkimia["nama_BahanKimia"]; ?>
        &jenis=<?=$Bkimia["jenis"];?>
        &Merk=<?=$Bkimia['Merk'];?>
        &KlasifikasiBahaya=<?=$Bkimia['KlasifikasiBahaya'];?>
        &Gambar=<?=$Bkimia['Gambar']?>">
        <?= $Bkimia["nama_BahanKimia"]; ?></a>

    </li>
<?php endforeach; ?>
</ul>
</body>
</html>