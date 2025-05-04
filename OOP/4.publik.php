<?php

class Laptop{
    public $pemilik;
    public $merk = "Asus";

    public function hidupkan_Laptop() {
        return "hidupkan Laptop";
    }
}

$laptop_anto = new Laptop();
$laptop_anto->pemilik = "Anto";

echo "Laptop ini milik <b>$laptop_anto->pemilik</b> merk <b>$laptop_anto->merk</b>". PHP_EOL;
echo "<br>";
echo $laptop_anto->hidupkan_Laptop(). PHP_EOL;