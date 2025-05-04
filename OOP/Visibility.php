<?php

class Siswa {
    public $nama;           
    protected $nilai;         
    private $nisn;           

    public function __construct($nama, $nisn, $nilai) {
        $this->nama = $nama;
        $this->nisn = $nisn;
        $this->nilai = $nilai;
    }

    public function tampilInfo() {
        echo "Nama: " . $this->nama . "<br>";
        echo "NISN: " . $this->nisn . "<br>";
        echo "Nilai: " . $this->nilai . "<br>";
    }
}

class temen extends Siswa {
    public function ngomong() {
       echo "saya punya teman namanya $this->nama dan dia punya nilai $this->nilai<br>";
    }
}

$siswa1 = new temen("Fajar Kusuma", "1234567890", 88);

$siswa1->ngomong();      
$siswa1->ngomong();     




