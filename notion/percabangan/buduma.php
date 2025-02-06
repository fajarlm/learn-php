<?php
//no1
echo "No 1.<br>";
for ($tahun = 1600; $tahun <=2200; $tahun++){
    if($tahun % 400 == 0 ){
        echo "tahun kabisat tahun=$tahun<br> ";
    }else if($tahun %100 == 0 && $tahun % 400 != 0){
        echo "ini bukan tahun kabisat tahun=$tahun <br>";
    }else if ($tahun %4 == 0){
        echo "ini tahun kabisat = $tahun <br>";
    }else{
        echo "ini tahun biasa = $tahun<br>";
}
}
echo "<hr>";

//no2
echo "No 2.<br>";
// $buku = 20 ;
// $Eksemplar = $buku *10;
// $Harga1Eksamplar = 5000;
// $HargaBuku = $Eksemplar * $Harga1Eksamplar;
// $HargaSebelumDiskon = $HargaBuku * $Eksemplar ;

// if ($Eksemplar <=100){
//     echo "Anda Tidak mendapatkan diskon karna anda hanya belanja sebnayak $Eksemplar eksempler";
// }else if ($Eksemplar >100 && $Eksemplar <200){
//     $diskon = 0.5 * $HargaSebelumDiskon;
//     $HargaSetelahDiskon = $HargaSebelumDiskon - $diskon;
//     $HargaSetelahDiskon = number_format($HargaSetelahDiskon, 0, '.', ',');
//     echo "Anda Mendapatkan diskon sebesar 20%($diskon) karena anda belanja $Eksemplar($HargaSebelumDiskon) eksamplar dan harga Setelah diskon adalah $HargaSetelahDiskon";
// }else if($Eksemplar == 200){
//     $diskon = 0.15 * $HargaSebelumDiskon;
//     $HargaSetelahDiskon = $HargaSebelumDiskon - $diskon;
//     $HargaSetelahDiskon = number_format($HargaSetelahDiskon, 0, '.', ',');
//     echo "Anda Mendapatkan diskon sebesar 20%($diskon) karena anda belanja $Eksemplar($HargaSebelumDiskon) eksamplar dan harga Setelah diskon adalah $HargaSetelahDiskon";
// }else if ($Eksemplar >200 && $Eksemplar <=300){
//     $diskon = 0.17 * $HargaSebelumDiskon;
//     $HargaSetelahDiskon = $HargaSebelumDiskon - $diskon;
//     $HargaSetelahDiskon = number_format($HargaSetelahDiskon, 0, '.', ',');
//     echo "Anda Mendapatkan diskon sebesar 20%($diskon) karena anda belanja $Eksemplar($HargaSebelumDiskon) eksamplar dan harga Setelah diskon adalah $HargaSetelahDiskon";
// }else{
//     $diskon = 0.27 * $HargaSebelumDiskon;
//     $HargaSetelahDiskon = $HargaSebelumDiskon - $diskon;
//     echo "Anda Mendapatkan diskon sebesar 20%($diskon) karena anda belanja $Eksemplar($HargaSebelumDiskon) eksamplar dan harga Setelah diskon adalah $HargaSetelahDiskon";
// }

//menggunakan func
function hitungDiskon($Eksemplar, $HargaSebelumDiskon) {
    if ($Eksemplar <= 100) {
        return "Anda Tidak mendapatkan diskon karna anda hanya belanja sebanyak $Eksemplar eksemplar";
    } else if ($Eksemplar > 100 && $Eksemplar < 200) {
        $diskon = 0.2 * $HargaSebelumDiskon;
        $HargaSetelahDiskon = $HargaSebelumDiskon - $diskon;
        $HargaSetelahDiskon = number_format($HargaSetelahDiskon, 0, '.', ',');
        $diskon = number_format($diskon, 0, '.', ',');
        return "Anda Mendapatkan diskon sebesar 20% (Rp $diskon) karena anda belanja $Eksemplar eksemplar dan harga setelah diskon adalah Rp $HargaSetelahDiskon";
    } elseif ($Eksemplar == 200) {
        $diskon = 0.15 * $HargaSebelumDiskon;
        $HargaSetelahDiskon = $HargaSebelumDiskon - $diskon;
        $HargaSetelahDiskon = number_format($HargaSetelahDiskon, 0, '.', ',');
        $diskon = number_format($diskon, 0, '.', ',');
        return "Anda Mendapatkan diskon sebesar 15% (Rp $diskon) karena anda belanja $Eksemplar eksemplar dan harga setelah diskon adalah Rp $HargaSetelahDiskon";
    } else if ($Eksemplar > 200 && $Eksemplar <= 300) {
        $diskon = 0.17 * $HargaSebelumDiskon;
        $HargaSetelahDiskon = $HargaSebelumDiskon - $diskon;
        $HargaSetelahDiskon = number_format($HargaSetelahDiskon, 0, '.', ',');
        $diskon = number_format($diskon, 0, '.', ',');
        return "Anda Mendapatkan diskon sebesar 17% (Rp $diskon) karena anda belanja $Eksemplar eksemplar dan harga setelah diskon adalah Rp $HargaSetelahDiskon";
    } else {
        $diskon = 0.27 * $HargaSebelumDiskon;
        $HargaSetelahDiskon = $HargaSebelumDiskon - $diskon;
        $HargaSetelahDiskon = number_format($HargaSetelahDiskon, 0, '.', ',');
        $diskon = number_format($diskon, 0, '.', ',');
        return "Anda Mendapatkan diskon sebesar 27% (Rp $diskon) karena anda belanja $Eksemplar eksemplar dan harga setelah diskon adalah Rp $HargaSetelahDiskon";
    }
}

$buku = 20;
$Eksemplar = $buku * 10;
$Harga1Eksamplar = 5000;
$HargaBuku = $Eksemplar * $Harga1Eksamplar;
$HargaSebelumDiskon = $HargaBuku;

echo hitungDiskon($Eksemplar, $HargaSebelumDiskon);

//

// $buku = 20;
// $Eksemplar = $buku * 10;
// $Harga1Eksamplar = 5000;
// $HargaBuku = $Eksemplar * $Harga1Eksamplar;
// $HargaSebelumDiskon = $HargaBuku;

// if ($Eksemplar <= 100) {
//     echo "Anda Tidak mendapatkan diskon karna anda hanya belanja sebanyak $Eksemplar eksemplar";
// } else if ($Eksemplar > 100 && $Eksemplar < 200) {
//     $diskon = 0.2 * $HargaSebelumDiskon;
//     $HargaSetelahDiskon = $HargaSebelumDiskon - $diskon;
//     // $HargaSetelahDiskon = number_format($HargaSetelahDiskon, 0, '.', ',');
//     echo "Anda Mendapatkan diskon sebesar 20% (Rp " . number_format($diskon, 0, '.', ',') . ") karena anda belanja $Eksemplar(Rp". number_format($HargaSetelahDiskon, 0, '.', ','). ") eksemplar dan harga setelah diskon adalah Rp $HargaSetelahDiskon";
// } elseif ($Eksemplar == 200) {
//     $diskon = 0.15 * $HargaSebelumDiskon;
//     $HargaSetelahDiskon = $HargaSebelumDiskon - $diskon;
//     // $HargaSetelahDiskon = number_format($HargaSetelahDiskon, 0, '.', ',');
//     echo "Anda Mendapatkan diskon sebesar 15% (Rp " . number_format($diskon, 0, '.', ',') . ") karena anda belanja $Eksemplar(Rp". number_format($HargaSetelahDiskon, 0, '.', ','). ") eksemplar dan harga setelah diskon adalah Rp $HargaSetelahDiskon";
// } else if ($Eksemplar > 200 && $Eksemplar <= 300) {
//     $diskon = 0.17 * $HargaSebelumDiskon;
//     $HargaSetelahDiskon = $HargaSebelumDiskon - $diskon;
//     // $HargaSetelahDiskon = number_format($HargaSetelahDiskon, 0, '.', ',');
//     echo "Anda Mendapatkan diskon sebesar 17% (Rp " . number_format($diskon, 0, '.', ',') . ") karena anda belanja $Eksemplar(Rp". number_format($HargaSetelahDiskon, 0, '.', ','). ") eksemplar dan harga setelah diskon adalah Rp $HargaSetelahDiskon";
// } else {
//     $diskon = 0.27 * $HargaSebelumDiskon;
//     $HargaSetelahDiskon = $HargaSebelumDiskon - $diskon;
//     // $HargaSetelahDiskon = number_format($HargaSetelahDiskon, 0, '.', ',');
//     echo "Anda Mendapatkan diskon sebesar 27% (Rp " . number_format($diskon, 0, '.', ',') . ") karena anda belanja $Eksemplar(Rp". number_format($HargaSetelahDiskon, 0, '.', ','). ") eksemplar dan harga setelah diskon adalah Rp $HargaSetelahDiskon";
// }
