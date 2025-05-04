<?php
//no 1
//tipe array ada 3 = index multidimensi satudimensi
echo "No 1:<br>";
$scores = [80,75,90,85];
for ($i = 0; $i < count($scores); $i++){
    echo "Nilai ke-$i = $scores[$i] <br>\n";
}
echo "<br>";

//no 2
echo "No 2:<br>";
$barang = ["laptop", "mouse", "Keyboard", "Monitor"];
echo " Barang yang ada pilih $barang[2]";
echo "<br>";

//no 3
echo "No 3:<br>";
$ages = [15,16,17,18,19,20,21,22];
for ($i = 0; $i < count($ages); $i++){
    if ($ages[$i] % 2== 0){
        continue;
    }
    if ($ages[$i] >20){
        break;
    }
    echo "siswa dengan  $ages[$i] tahun diperiksa <br>\n";
}
echo"<br>";
$umur = [15,16,17,18,19,20,21,22];
foreach($umur as $jadi ){
    if ($jadi % 2== 0){
        continue;
    }
    if ($jadi >20){
        break;
    }
    echo "siswa dengan  $jadi tahun diperiksa <br>\n";
}