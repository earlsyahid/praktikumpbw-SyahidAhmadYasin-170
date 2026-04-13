<?php include "nav.php"; ?>

<h3>Daftar Nama Hewan</h3>

<form method="post">
    Masukkan Nama Hewan (pisahkan dengan koma):
    <br>
    <input type="text" name="hewan" required>
    <br><br>
    <button type="submit">Tampilkan</button>
</form>

<?php
if (isset($_POST['hewan'])) {
    $data = $_POST['hewan'];
    $hewan = explode(",", $data);

    echo "<ul>";
    foreach ($hewan as $nama) {
        echo "<li>" . trim($nama) . "</li>";
    }
    echo "</ul>";
}
?>