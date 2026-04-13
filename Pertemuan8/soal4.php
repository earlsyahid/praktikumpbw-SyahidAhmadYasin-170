<?php include "nav.php"; ?>

<h3>Cek Ganjil Genap</h3>

<form method="post">
    Masukkan Angka:
    <input type="number" name="angka" required>
    <button type="submit">Cek</button>
</form>

<?php
if (isset($_POST['angka'])) {
    $angka = $_POST['angka'];
    $hasil = ($angka % 2 == 0) ? "Genap" : "Ganjil";

    echo "Angka <b>$angka</b> adalah <b>$hasil</b>";
}
?>  