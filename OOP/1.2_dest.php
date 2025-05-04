<?php

class Laptop {
    private $pemilik = "saya";
    private $merk = "Lenovo";

    function __construct() {
        echo "ini teks dari constructor". PHP_EOL;
    }

    public function HidupkanLaptop(){
        return "Laptop milik $this->pemilik merk $this->merk dinyalakan". PHP_EOL;
    }

    function __destruct()
    {
        echo "ini teks dari destructor". PHP_EOL;
    }

}

$iwan = new Laptop();

echo $iwan->HidupkanLaptop();

unset($iwan); // memanggil destructor secara manual
echo "i teks setelah unset". PHP_EOL;