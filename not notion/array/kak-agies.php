<?php
echo "No  1 <br>";
$barang = ["laptop", "mouse", "Keyboard", "Monitor"];

foreach($barang as $item){
    echo "$item,"; 
}

echo "<hr>";
//
for($i=0;$i<count($barang);$i++){
    echo "$barang[$i]<br>";
}
echo "<hr>";
//
foreach($barang as $key => $value){
    echo "ini indek ke $key = $value <br>";
}
echo "<hr>";
//
$a =0;
while($a<count($barang)){
    echo "$barang[$a]<br>";
    $a++;
}
echo "<hr>";
//
$b =0;
do{
    echo "$barang[$b]<br>";
    $b++;
}while($b<count($barang));
echo "<hr>";
//
echo "No 2 <br>";
echo $barang[2];

echo "<hr>";

$buah = ["Apel", "Jeruk", "Mangga", "Pisang"];
unset($buah[1]);
print_r($buah);
echo "<hr>";
$buah = array_values($buah);
print_r($buah);
echo "<hr>";
array_splice($buah, 1, 1);
print_r($buah);

echo "<hr>";
//no 3
echo "No 3 <br>";
$aktivitas =["Belajar", "Makan", "Tidur"];
$aktivitas[3] = "Olaharaga";
$aktivitas[] = "Bermain";

foreach($aktivitas as $kegiatan ){
    echo "$kegiatan,";
}
echo"<hr>"; 
//coba                              
$pelanggan = [
    "nama" => "Agies",
    "umur" => 19,
    "pekerjaan" => "Mahasiswa"
];
echo "<h2><i>Nama = $pelanggan[nama]</i></h2><br>";
echo "<h2><i>Umur = $pelanggan[umur]</i></h2><br>";
echo "<h2><i>Pekerjaan = $pelanggan[pekerjaan]</i></h2><br>";
foreach($pelanggan as $kunci => $hati){
    echo "<h4><i>$kunci : $hati </i></h4><br>";
}

echo "<hr>";

//no 5
echo "No 5 <br>";
$siswa = [
    [
        "Nama" => "Beni",
        "Kelas" => "PPLG XI-1",
        "Usia" => 17
    ],
    [
        "Nama" => "Tari",
        "Kelas" => "PPLG XI-2",
        "Usia" => 16
    ],
    [
        "Nama" => "Andi",
        "Kelas" => "PPLG XII-2",
        "Usia" => 18
    ],
    
];

// foreach($siswa as $murid){
//     echo "Nama : $murid[Nama] <br>";
//     echo "Kelas : $murid[Kelas] <br>";
//     echo "Usia : $murid[Usia] <br>";
//     echo "<hr>";
// }
foreach($siswa as $key => $murid){
    echo "<hr> siswa ke- $key , ";
    echo "Nama : $murid[Nama] , ";
    echo "Kelas : $murid[Kelas], ";
    echo "Usia : $murid[Usia]";
    echo "<hr>";
    foreach($murid as $kunci => $value){
        echo "$kunci : $value <br>";
    }
}