<?php

class Siswa{
    public $nama;
    public $nis;
    
    public function __construct($nama, $nis) {
        $this->nama = $nama;
        $this->nis = $nis;
    }
    public function GetNis() {
        return $this->nis;
    }

    public function GetNama() {
        return $this->nama;
    }

    public function NamaNis(){
        return "Nama :$this->nis<br> Nis:$this->nama";
    }        
}

class SiswaKelas extends Siswa{
    public $Rombel;
    public $Rayon;
    
   public function __construct($nama, $nis, $Rombel, $Rayon) {
        parent::__construct($nama, $nis);
        $this->Rombel = $Rombel;
        $this->Rayon = $Rayon;
    }



    public function Output(){
        return " Nama:<b> $this->nama</b>.<br> 
        NIS: <b>$this->nis</b><br>
        Rombel: <b>$this->Rombel</b> <br>
        Rayon: <b>$this->Rayon</b>" . PHP_EOL;
    }
}

$siswa_kelas = new SiswaKelas("Budi", 12410279, "epepleg", "citeureup");
echo "Siswa 1: " . $siswa_kelas->Output() . PHP_EOL;

echo "<br/>";
echo $siswa_kelas->nama . PHP_EOL;
echo $siswa_kelas->GetNis() . PHP_EOL;
echo $siswa_kelas->Rombel . PHP_EOL;