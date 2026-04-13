<?php include "nav.php"; ?>

<h3>Menentukan Jenis Kendaraan</h3>

<form method="post">
    Jumlah Roda:
    <input type="number" name="roda" required>
    <button type="submit">Cek</button>
</form>

<?php
if (isset($_POST['roda'])) {
    $roda = $_POST['roda'];

    switch ($roda) {
        case 2:
            echo "Jenis kendaraan: Sepeda Motor";
            break;
        case 3:
            echo "Jenis kendaraan: Becak";
            break;
        case 4:
            echo "Jenis kendaraan: Mobil";
            break;
        case 6:
            echo "Jenis kendaraan: Truk";
            break;
        default:
            echo "Jenis kendaraan tidak diketahui";
    }
}
?>