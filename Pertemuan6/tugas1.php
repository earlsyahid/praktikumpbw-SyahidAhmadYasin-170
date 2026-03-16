<?php
    define("PAJAK",0.10);
    $barang=["keyboard" => 150000];
    $jumlah_beli=2;
    $harga = $barang["keyboard"];
    $total = $harga * $jumlah_beli;
    $pajak = $total * PAJAK;
    $total_bayar = $total + $pajak;
?>
    
<h2>Perhitungan Total Pembelian (dengan Array)</h2>
<hr>

<?php
    echo "Nama Barang: keyboard <br>";
    echo "Harga Satuan: Rp " . number_format($harga,0,",",".") . "<br>";
    echo "Jumlah Beli: $jumlah_beli <br>";
    echo "Total Harga (Sebelum Pajak): Rp " . number_format($total,0,",",".") . "<br>";
    echo "Pajak (10%): Rp " . number_format($pajak,0,",",".") . "<br>";
    echo "<b>Total Bayar: Rp " . number_format($total_bayar,0,",",".") . "</b>";
    
?>