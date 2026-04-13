<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="uts.css">
    <title>Koperasi Mahasiswa</title>
</head>
<body>
    <header>
        <h1>Koperasi Mahasiswa</h1>
    </header>
    <div class="container">
        <section class="content">
    <h2>Hasil Total Belanja</h2>
    
    <?php
    define("PAJAK", 0.15);
    $nama = $_POST['username'];
    $nim = $_POST['nim'];
    $email = $_POST['email'];
    $jenislayanan = $_POST['jenislayanan'];
    $barang=["pensil" => 3000, "buku" => 5000, "penghapus" => 2000];

    echo "Nama : $nama <br>";
    echo "NIM : $nim <br>"; 
    echo "Email : $email <br>";
    echo "Jenis Layanan : $jenislayanan <br>";
    echo "Barang yang dibeli : <br>";
    $total = 0;

    ?>
    </section>
    </div>
</body>
</html>