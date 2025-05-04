<?php
$pembeli = $_POST['embeli'];
$buku = $_POST['uku'];
$judul = $_POST['udul'];  

$eksemplar = $buku * 10;
$eksam100 = min($eksemplar, 100);
$harga = 5000;
$hargaBuku = $eksemplar * $harga;
echo"Buku yang dibeli $buku  <br>";
echo"Harga buku $hargaBuku  <br>";
echo "Nama buku yang dibeli $judul <br>";


if($eksemplar <= 100){
    echo"Tidak ada diskon";
}
else if( $eksemplar >= 100 && $eksemplar < 200){
    echo"diskon 5% <br>";
    $diskon = (1.00 - 0.05) * $hargaBuku;
    echo"Harga setelah diskon adalah Rp$diskon";
}
else if($eksemplar <= 200){
    echo"diskon 15% dan 5% <br> ";
    $eksam = $eksemplar - 100;
    $total = $eksam100 * $harga;
    $total2 = $eksam * $harga;
    $diskon = ($total * 0.95) + ($total2 * 0.85);
    echo"Harga setelah diskon adalah Rp$diskon";
}
else if($eksemplar > 200){
       echo" Diskon 7% dan 17% dan 27% <br> ";
       $diskon1 = $eksam100 * $harga * 0.07;
       $diskon2 = 100 * $harga * 0.17;
       $diskonSisanya = ($eksemplar - 200) * $harga * 0.27;
       $totalDiskon = $diskon1 + $diskon2 + $diskonSisanya;
       $hargaSetelahDiskon = $eksemplar * $harga - $totalDiskon;
       echo " Diskon Rp$hargaSetelahDiskon". "<br>";
}