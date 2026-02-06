<?php 


$data_mhs = [
    ["Fajar Yoga Borneo", "10 Agustus 2003", "082210437158", "fajarborneo102003@gmail.com"],
    ["Fajar Yoga Borneo", "10 Agustus 2003", "082210437158", "fajarborneo102003@gmail.com"],
    ["Fajar Yoga Borneo", "10 Agustus 2003", "082210437158", "fajarborneo102003@gmail.com"],
    ["Fajar Yoga Borneo", "10 Agustus 2003", "082210437158", "fajarborneo102003@gmail.com"],
    ["Fajar Yoga Borneo", "10 Agustus 2003", "082210437158", "fajarborneo102003@gmail.com"],
    ["Fajar Yoga Borneo", "10 Agustus 2003", "082210437158", "fajarborneo102003@gmail.com"],
    ["Fajar Yoga Borneo", "10 Agustus 2003", "082210437158", "fajarborneo102003@gmail.com"],
    ["Fajar Yoga Borneo", "10 Agustus 2003", "082210437158", "fajarborneo102003@gmail.com"],
    ["Fajar Yoga Borneo", "10 Agustus 2003", "082210437158", "fajarborneo102003@gmail.com"],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
<h1>Data Mahasiswa</h1>


<?php foreach($data_mhs as $mhs) : ?>
<ul>
    <li>Nama : <?= $mhs[0]; ?></li>
    <li>Tanggal Lahir : <?= $mhs[1]; ?></li>
    <li>No HP : <?= $mhs[2]; ?></li>
    <li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>