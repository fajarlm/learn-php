<?php

$buku = 20;
$eksemplar = $buku * 10;
$hargaEks = 5000;
$hargaBuku = $eksemplar * $hargaEks;
echo"Buku yang dibeli $buku    <br>";
echo"Harga buku $hargaBuku    <br>";


if($eksemplar <= 100){
    echo"Tidak ada diskon";
}
else if( $eksemplar >= 100 && $eksemplar < 200){
    echo"diskon 5%  <br>";
    $diskon = 0.95 * $hargaBuku;
    echo"Harga setelah diskon adalah Rp$diskon";
}
else if($eksemplar <= 200){
    echo"diskon 15% dan 5% <br>  ";
    $eksam = $eksemplar - 100;
    $eksam100 = min($eksemplar, 100);
    $total = $eksam100 * $hargaEks;
    $total2 = $eksam * $hargaEks;
    $diskon = ($total * 0.95) + ($total2 * 0.85);
    echo"Harga setelah diskon adalah Rp$diskon";
}
else if($eksemplar > 200){
       echo" Diskon 7% dan 17% dan 27% <br>   ";
       $eksam100 = min($eksemplar, 100);
       $diskon1 = $eksam100 * $hargaEks * 0.07;
       $diskon2 = 100 * $hargaEks * 0.17;
       $diskonSisanya = ($eksemplar - 200) * $hargaEks * 0.27;
       $totalDiskon = $diskon1 + $diskon2 + $diskonSisanya;
       $hargaSetelahDiskon = $eksemplar * $hargaEks - $totalDiskon;
       echo " Diskon Rp$hargaSetelahDiskon". "<br>";
    }