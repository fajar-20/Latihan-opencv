<?php 

// koneksi ke dbms
$conn = mysqli_connect ("localhost", "root", "", "phpdasar");

// cek apakah tombol submit sudah ditekan ata belum
if (isset($_POST["submit"]) ) {

    // ambil data dari tiap elemen dalam form
    $nrp = $_POST['nrp'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $jurusan = $_POST['jurusan'];
    $gambar = $_POST['gambar'];

    // query insert data
    $query = "INSERT INTO mahasiswa
                VALUES
            ('', '$nrp', '$nama', '$email', '$jurusan', '$gambar')
            
            ";
    if (mysqli_query($conn, $query)) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan!');
                document.location.href = 'tambah.php';
            </script> 
            ";
    }

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <h1>Tambah Data Mahasiswa</h1>
    <button class="btn-back" onclick="window.location.href='index.php'">< Kembali</button>
    <br><br>
    <form class="form-data" action="" method="post">
        <label>NRP</label>
        <span>:</span>
        <input type="text" name="nrp">

        <label>Nama</label>
        <span>:</span>
        <input type="text" name="nama">

        <label>Email</label>
        <span>:</span>
        <input type="email" name="email">

        <label>Jurusan</label>
        <span>:</span>
        <input type="text" name="jurusan">

        <label>Gambar</label>
        <span>:</span>
        <input type="file" name="gambar">

        <button type="submit" name="submit">Tambah Data</button>
    </form>

    
 
    
</body>
</html>