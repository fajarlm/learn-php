<?php
class siswa{
    public $nama;
    public $nis;

    public function __construct($nama, $nis) {
        $this->nama = $nama;
        $this->nis = $nis;
    }

    public function GetNis() {
        return $this->nis;
        
    }
}

class kelas extends siswa{
    public $kelas;
    public $jurusan;

    public function __construct($nama, $nis, $kelas, $jurusan) {
        parent::__construct($nama, $nis);
        $this->kelas = $kelas;
        $this->jurusan = $jurusan;
    }

    public function GetKelas() {
        return $this->kelas;
        
    }
}

$sis1 = new siswa("Budi", 12345);
$sis2 = new kelas("Siti", 67890, "XII", "IPA");
echo "Siswa 1: " . $sis1->nama . ", NIS: " . $sis1->GetNis() . PHP_EOL;