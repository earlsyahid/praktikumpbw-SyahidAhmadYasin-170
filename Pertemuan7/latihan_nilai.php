<!DOCTYPE html>
<html>
<head>
    <title>Hasil Nilai</title>
</head>
<body>

<h2>Hasil Penilaian</h2>

<?php
$nama  = $_POST['nama'];
$nilai = $_POST['nilai'];
$predikat = "";

if ($nilai >= 85 && $nilai <= 100) {
    $predikat = "A";
} elseif ($nilai >= 75 && $nilai <= 84) {
    $predikat = "B";
} elseif ($nilai >= 65 && $nilai <= 74) {
    $predikat = "C";
} elseif ($nilai >= 50 && $nilai <= 64) {
    $predikat = "D";
} elseif ($nilai >= 0 && $nilai <= 49) {
    $predikat = "E";
} else {
    $predikat = "Nilai tidak valid";
}

echo "Nama Mahasiswa : $nama<br>";
echo "Nilai Ujian : $nilai<br>";
echo "Predikat Nilai : $predikat";
?>

</body>
</html>