<?php

class Laptop {
    public $pemilik;
    
    public function HidupkanLaptop(){
        return "Laptop milik $this->pemilik dinyalakan". PHP_EOL;
    } 
}

$wawan = new Laptop();
$wawan->pemilik = "Wawan";

echo "Nama pemilik laptop adalah " . $wawan->pemilik . PHP_EOL;
echo $wawan->HidupkanLaptop(). PHP_EOL ;

