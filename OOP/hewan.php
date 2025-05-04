<?php

class hewan {
    public $nama;
    public $jenis;
    public $umur;
    public $hidup;

    public function __construct($nama, $jenis, $umur, $hidup) {
        $this->nama = $nama;
        $this->jenis = $jenis;
        $this->umur = $umur;
        $this->hidup = $hidup;
    }

    public function info() {
        return "Nama: " . $this->nama . ", Jenis: " . $this->jenis . ", umur: " . $this->umur . PHP_EOL;
    }

    public function berjalan(){
        if($this->hidup == "darat"){ 
            return true;
        }else{
            return false;
        }
    }
}

$bebek = new hewan(jenis: "Unggas", umur: 2.4, nama:"Bebek",hidup:"darat");
$anjing = new hewan("Anjing", "Mamalia", 3.5, "darat");
$paus = new hewan("Paus", "Mamalia", 5, "laut");

echo $anjing->info() . PHP_EOL;
echo "Apakah hewan $anjing->nama bisa berjalan ? " . ($anjing->berjalan() ? 'Ya': 'tidak') . PHP_EOL;

echo $bebek->info() . PHP_EOL;
echo "Apakah hewan $bebek->nama bisa berjalan ? " . ($bebek->berjalan() ? 'Ya': 'tidak') . PHP_EOL;

echo $paus->info() . PHP_EOL;
echo "Apakah hewan $paus->nama bisa berjalan ? " . ($paus->berjalan() ? 'Ya': 'tidak') . PHP_EOL;