<?php include "nav.php"; ?>

<h3>Cetak Bilangan Genap</h3>

<form method="post">
    Batas Akhir:
    <input type="number" name="batas" required>
    <button type="submit">Tampilkan</button>
</form>

<?php
if (isset($_POST['batas'])) {
    $batas = $_POST['batas'];

    for ($i = 2; $i <= $batas; $i += 2) {
        echo $i . "<br>";
    }
}
?>