<?php

class komputer{
    private $jenis = "Laptop";
    public $merk = "lenovo";

    public function tampilkan(){
        echo "ini adalah jenis $this->jenis merk $this->merk". PHP_EOL;
    }

    public function output(){
        return "ini adalah komputer jenis $this->jenis merk $this->merk". PHP_EOL;
    }


}

$komputer1 = new komputer();
$komputer1->output();
$komputer1->tampilkan();

$output = $komputer1->output();
$output = strtoupper($output);
echo $output;

// $tampil = $komputer1->tampilkan();
// $tampilkan = strtoupper($tampil);
// echo $tampilkan;