<?php
function hitung_harga_total($jumlah_buku) {
    $harga_per_eksemplar = 5000;
    $total_eksemplar = $jumlah_buku * 10;
    
    if ($total_eksemplar <= 100) {
        $total_harga = $total_eksemplar * $harga_per_eksemplar;
    } elseif ($total_eksemplar <= 200) {
        $harga_100_pertama = 100 * $harga_per_eksemplar * 0.95; // Diskon 5%
        $harga_sisa = ($total_eksemplar - 100) * $harga_per_eksemplar * 0.85; // Diskon 15%
        $total_harga = $harga_100_pertama + $harga_sisa;
    } else {
        $harga_100_pertama = 100 * $harga_per_eksemplar * 0.93; // Diskon 7%
        $harga_100_kedua = 100 * $harga_per_eksemplar * 0.83; // Diskon 17%
        $harga_sisa = ($total_eksemplar - 200) * $harga_per_eksemplar * 0.73; // Diskon 27%
        $total_harga = $harga_100_pertama + $harga_100_kedua + $harga_sisa;
    }
    
    return $total_harga;
}

// Contoh penggunaan dengan echo
echo "Masukkan jumlah buku: ";
$jumlah_buku = (int) trim(fgets(STDIN));
$total_harga = hitung_harga_total($jumlah_buku);
echo "Total harga yang harus dibayar: Rp " . number_format($total_harga, 2, ',', '.') . "\n";
hitung_harga_total(20);
?>
`