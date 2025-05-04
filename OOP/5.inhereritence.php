<?php

class Laptop{
    public $pemilik;
    public $merk = "Asus";

    public function hidupkan_Laptop() {
        return "hidupkan Laptop";
    }
}

class LaptopGaming extends Laptop{
    public $merk = "Asus ROG";
    public $spesifikasi = "i7 16GB 1TB SSD";

    public function hidupkan_Laptop() {
        return "hidupkan Laptop Gaming";
    }
}