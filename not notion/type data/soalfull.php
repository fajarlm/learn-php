<?php

//no1
echo "No 1.<br>";
$a = "25.5";
$b = (int)$a;
$c = (float)$a;

echo "$a\n$b\n$c";
echo "<hr>";
//no2
echo "No 2.<br>";
$string = "SMK Wikrama";
$wikrama =substr($string,4,7);
$smk    = substr($string,0,3);
$letik  = strtolower($smk);

echo "$wikrama\n$smk\n$letik <hr>";

//no3
echo "No 3.<br>";
$bogor = "SMK Wikrama Bogor";
$kbogor = strlen($bogor);
$indo = str_replace("Bogor", "Indonesia", $bogor);
$kindo = strlen($indo);
echo"$bogor memiliki karakter sebnyak : $kbogor <br>";
echo "$indo memiliki karakter sebnyak $kindo <hr>";

//no 4
echo "No 4.<br>";
$kata = "belajar php di SMK Wikrama Bogor sangat menyenangkan";
$kecil = strtolower($kata);
$kap = ucwords($kata);

echo "$kata <br>";
echo "$kecil<br>";
echo $kap;
