<?php

class buku{

    public static $jumlahObjek = 0;

    public $judul;
    public $penulis;
    public $Tahun_terbit;

    public function __construct($judul,$penulis,$Tahun_terbit){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->Tahun_terbit = $Tahun_terbit;

        self::$jumlahObjek++;

    }
    public function ShowInfo(){
        echo "buku_" . self::$jumlahObjek . ": $this->judul, $this->penulis, $this->Tahun_terbit" . PHP_EOL;
    }
}

$buku_pertama = new buku("Belajar PHP", "Budi", 2020);
$buku_pertama->ShowInfo();
echo "<br>";
echo $buku_pertama->judul;
echo "<br>";
$buku_kedua = new buku("Belajar Java", "Siti", 2021);
$buku_kedua->ShowInfo();
echo "<br>";
$buku_kedu = new buku("Belajar Java", "Siti", 2021);
$buku_kedu->ShowInfo();