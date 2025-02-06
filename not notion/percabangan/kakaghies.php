<?php
//no 1
echo "No 1. ";
$nilai = 75;
if($nilai >= 75){
    echo "Nilai anda $nilai, Anda Lulus";
}
echo"<hr>";

//no 2
echo "No 2. ";
$total = 50001;
$formatted_total = number_format($total, 0, ',', '.');
if ($total > 50000){
    echo "Selamat Anda Mendapatkan Bonus Minuman karna total belanja anda Rp$formatted_total dan lebih dari Rp50.000";
}else{
    echo "Maaf Anda Tidak Mendapatkan Bonus Minuman karna total belanja anda Rp$formatted_total dan kurang dari Rp50.000";
}
echo "<hr>";

//no 3
echo "No 3. ";
$Tobel = 210000;
$format_tobel = number_format($Tobel,0,',','.');
if($Tobel > 200000){
    echo "Karna Anda belanja Rp$format_tobel Anda Mendapatkan Diskon sebesar 20% ";
}elseif($Tobel >= 100000 && $Tobel<=200000){
    echo "Karna Anda belanja Rp$format_tobel Anda Mendapatkan Diskon sebesar 10%  ";
}else{
    echo"Anda tidak mendapatkan diskon";
}
echo "<hr>";

//no 4
echo"No 4.";
$hari = 1;
switch($hari){
    case 2;
        echo " hari ini adalah hari selasa karna angka $hari";
        break;
    case 3 ;
        echo " hari ini adalah hari rabu karna angka $hari";
        break;
    case 4;
        echo " hari ini adalah hari kamis karna angka $hari";
        break;
    case 5;
        echo " hari ini adalah hari jumat karna angka $hari";
        break;
    case 6;
        echo " hari ini adalah hari sabtu karna angka $hari";
        break;
    case 1;
        echo " hari ini adalah hari senin karna angka $hari";
        break;
    case 7;
        echo " hari ini adalah hari minggu karna angka $hari";
        break;
    default;
        echo "Nomor hari tidak valid";
}
