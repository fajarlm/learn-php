<?php
echo "No 1. ";
$sisi = 4;
$luas = $sisi**2;
echo "jika sisi nya 4 makanya luasya :$luas";
echo "<hr>";

echo "No 2. ";
$jari = 8**2;
$phi = 3.14;
$luasl = $jari * $phi;
echo "jika jari-jariny 8 maka luasnya :$luasl";
echo "<hr>";

echo "No 3.<br>";
$a = 19;
$b = 20;

//menggunakan operator relasi lebih besar
$c = $a > $b;
echo "$a > $b: $c";
echo "<br>";

//menggunakan operator relasi lebih kecil
$c = $a < $b;
echo "$a < $b: $c";
echo "<br>";


//menggunakan operator relasi lebih sama dengan
$c = $a == $b;
echo "$a == $b: $c";
echo "<br>";

//menggunakan operator relasi lebih tidak sama dengan
$c = $a != $b;
echo "$a != $b: $c";
echo "<br>";

//menggunakan operator relasi lebih besar sama dengan
$c = $a >= $b;
echo "$a >= $b: $c";
echo "<br>";

//menggunakan operator relasi lebih kecil sama dengan
$c = $a <= $b;
echo "$a <= $b: $c";
echo "<br>";
