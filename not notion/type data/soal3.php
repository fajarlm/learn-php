<?php
$bogor = "SMK Wikrama Bogor";
$kbogor = strlen($bogor);
$indo = str_replace("Bogor", "Indonesia", $bogor);
$kindo = strlen($indo);
echo"$bogor memiliki karakter sebnyak : $kbogor <br>";
echo "$indo memiliki karakter sebnyak $kindo";