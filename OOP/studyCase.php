<?php

class Kasir{
    const TOKO = "TOKO BERNAMA";

    public $barang;
    public $harga;
    public $jumlah;
    public $total;

    public function __construct($barang, $harga, $jumlah) {
        $this->barang = $barang;
        $this->harga = $harga;
        $this->jumlah = $jumlah;
        $this->total = 0;

        echo "Selamat datang di " . self::TOKO . "<br>";
        echo "ini adalah barang yang anda beli <br>"; ;
    }
    

    public function hitungTotal() {
        $this->total = $this->harga * $this->jumlah;
        return $this->total;
    }

    // public function info() {
    //     return $this->barang . ": " . $this->harga . "<br> Jumlah: " . $this->jumlah . "<br>Total: " . $this->hitungTotal() ."<br>";
    // }

    public function info() {
        return "
        <hr>
        <strong>Detail Pembelian:</strong><br>
        Nama Barang : {$this->barang} <br>
        Harga Satuan: Rp " . number_format($this->harga, 0, ',', '.') . "<br>
        Jumlah      : {$this->jumlah} <br>
        <strong>Total Bayar: Rp " . number_format($this->hitungTotal(), 0, ',', '.') . "</strong><br>
        <hr>
        ";
    }
    


    public function __destruct() {
        echo "Terima kasih telah berbelanja di " . self::TOKO . PHP_EOL;
    }

}

// $customer1 = new Kasir("Buku", 5000, 3);
// echo $customer1->info();
