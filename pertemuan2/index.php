<?php
//  Pertemuan 2 - PHP Dasar
//  Sintaks PHP

// Standar Output
// echo, print, print_r, var_dump


// penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// variabel dan tipe data
// variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka

// operator
// aritmatika  
// +, -, *, /, %

// $x = 10;
// $y = 20;
// echo $x + $y;

//  penggabung string / concatenation / concat
// .

// $nma_depan = "Fajar";
// $nama_belakang = "Borneo";
// echo $nma_depan . " " . $nama_belakang;

// assignment
// =, +=, -=, *=, /=, %=, .=  
// $x = 1
// $x += 2;
// echo $x;
// $nama = "Fajar";
// $nama .=" ";
// $nama .= "Borneo";
// echo $nama;


// Perbandingan
//  <, >, <=, >=, ==, !=
var_dump(1 < 5);

// identitas
// ===, !==
// var_dump(1 === "1")


//  Logika
//  &&, ||, 







 $nama = "Fajar";


 echo " Halo, nama saya $nama";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, selamat datang <?php echo $nama ?> </h1>
</body>
</html>