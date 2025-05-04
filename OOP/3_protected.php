<?php

class Laptop{
    private $pemilik = "Anto";

    public function akses_pemilik(){
        return $this->pemilik;
    }

    protected function hidupkan_laptop(){
        return "Hidupkan_laptop". PHP_EOL;
    }

    public function paksa_hidup(){
        return $this->hidupkan_laptop();
    }
}

$laptop_anto = new Laptop();

// echo $laptop_anto->akses_pemilik(). PHP_EOL;
echo "<br>";

// echo $laptop_anto->pemilik. PHP_EOL; // Error, karena $pemilik adalah protected

echo $laptop_anto->paksa_hidup(). PHP_EOL;
echo "<br>";

// echo $laptop_anto->hidupkan_laptop(). PHP_EOL; // Error, karena hidupkan_laptop adalah protected