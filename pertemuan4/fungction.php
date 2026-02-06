<?php 
function sapaUser ($nama) {
    date_default_timezone_set('Asia/Jakarta');

    $jam = (int)date('H');
    if ($jam >= 5 && $jam < 11) {
        $sapaan = "Selamat Pagi";
    } elseif ($jam >= 11 && $jam < 15) {
        $sapaan = "Selamat Siang";
    } elseif ($jam >= 15 && $jam < 18) {
        $sapaan = "Selamt Sore";
    } else {
        $sapaan = "Selamat Malam";
    }
    return $sapaan. ", " . $nama . "!";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= sapaUser("Fajar");?></h1>
</body>
</html>