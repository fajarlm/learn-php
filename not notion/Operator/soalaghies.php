<?php
echo "No 1.<br>";
$gula    = 50;
$air     = 200;
$jeruk   = 1;
echo "jika ingin membuat 5 porsi minuman maka, total banyak gula yang dibutuhkan adalah ".($gula*5)."gram";
echo "<br>jika ingin membuat 5 porsi minuman maka, total banyak air yang dibutuhkan adalah ".($air*5)."mili";
echo "<br>jika ingin membuat 5 porsi minuman maka, total banyak jeruk yang dibutuhkan adalah ".($jeruk*5)." buah";
echo "<hr>";

//no 2
echo "No 2.<br>";
$saldo = 100.000;
$saldo += 50.000;
$saldo += 20.000;
echo "$saldo<br>";
$float = number_format($saldo, 3, '.', ',');
echo " maka saldo anak itu ($float)";
// var_dump($saldo);
echo "<hr>";

//no 3
echo "No 3.<br>";
$nilai = 80 ;
$jika = $nilai >= 75 ? "lulus " : "Tidak Lulus";
echo $jika;
echo "<hr>";
