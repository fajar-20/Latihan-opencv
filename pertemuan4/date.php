<?php 
    // date 
    // untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-y, g:i");

    // time
    // UNIX Timestamp / EPOCH time
    // detik yang sudah berlalu sejak 1 januari 1970
    // echo time();
    // echo date("d-M-y", time()-60*60*24*
    // 100);

    // mktime
    // membuat sendiri detik
    // mktime(0,0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun 
    // echo mktime(0,0,0,8,10,2003)
    // echo date("l", mktime(0, 0, 0, 8, 10, 2003));

    // echo date ("l",strtotime("10 Aug 2003"));


    // isset
    // $nama = "fajar";

    // if (isset($nama)) {
    //     echo"variable ada";
    // } else {
    //     echo "variable tidak ada";
    // }

    // empty
    // yang dianggap kosong
    // "" (string kosong)
    // 0
    // "0"
    // null
    // false
    // [] (array ksong)
    // variable belum dibuat

    // $umur = 0;
    // if (empty($umur)) {
    //     echo"kosong";
    // }

    // var_dump + die
    
    var_dump($data); die()



?>