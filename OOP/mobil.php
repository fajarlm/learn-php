<?php

class Mobil
{
    public static $jumlahObjek = 0;

    public $merk;
    public $model;
    public $tahun;

    public function __construct($merk, $model, $tahun)
    {
        $this->merk = $merk;
        $this->model = $model;
        $this->tahun = $tahun;

        // Tambah 1 setiap objek baru dibuat
        self::$jumlahObjek++;
    }

    public function output()
    {
        echo "Mobil_" . self::$jumlahObjek . ": $this->merk, $this->model, $this->tahun" . PHP_EOL;
    }
}

$Mobil_pertama = new Mobil("Toyota", "Avanza", 2020);
$Mobil_pertama->output();

$Mobil_Kedua = new Mobil("Honda", "Civic", 2021);
$Mobil_Kedua->output();
