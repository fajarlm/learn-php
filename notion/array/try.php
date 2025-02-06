<?php

// membuat array kosong
$buah = array();
$hobi = [];

// membuat array sekaligus mengisinya
$minuman = array("Kopi", "Teh", 50, TRUE, .5, [1,2,3]);
$makanan = ["Nasi Goreng", "Soto", "Bubur"];
$makanan[3] = "Mie";
unset($makanan[2]);

// menambahkan item array
$variable_array[3] = "isi";
array_push($variable_array, "isi"); // menambahkan di belakang
array_unshift($variable_array, "isi"); // menambah depan

// menghapus item array
unset($variable_array[2]); //index tertentu
array_pop($variable_array); // hapus item paling belakang
array_shift($variable_array); // hapus item paling depan

// membuat array dengan mengisi indeks tertentu
$anggota[1] = "Dian";
$anggota[2] = "Muhar";
$anggota[0] = "Sera";

var_dump($minuman);
echo "<br>";
var_dump($makanan);
echo "</br>";
var_dump($anggota);


echo "<hr>";
// membuat array
$barang = ["Buku Tulis", "Penghapus", "Spidol", "Pulpen"];

// // menampilkan isi array
// echo $barang[0]."<br>";
// echo $barang[1]."<br>";
// echo $barang[2]."<br>";

for ($i = 0; $i < count($barang); $i++) {
	echo $barang[$i]."<br>";
}

foreach ($barang as $index => $item) {
	// echo "index ke-" . $key . " = " $item . "<br>"; 
    echo "index ke-" . $index . " = " . $item . "<br>";
}

echo "<br><br>";

// membuat array
$hobi = [
    "Membaca",
    "Menulis",
    "Ngeblog"
];

// menambahkan isi pada idenks ke-3
$hobi[3] = "Coding";

// menambahkan isi pada indeks terakhir
$hobi[] = "Olahraga";

// cetak array dengan perulangan
foreach($hobi as $hobiku){
    echo $hobiku."<br>";
}

echo "<br><br>";

// membuat array
$user = [
    "dian",
    "muhar",
];

// mengisi array pada indek ke-1 ("muhar")
$user[1] = "ardianta";

// mencetak isi array
print_r($user);

echo"<br><br>";

$student = [
    "nama" => "Beni",
    "rombel" => "PPLG XI-1",
    "usia" => 17
];
$student["nama"];

// mencetak isi array assosiatif
echo "<h2>".$student["nama"]."</h2>";
echo "<p>Rombel: ".$student["rombel"]."</p>";
echo "<p>Usia: ".$student["usia"]."</p>";
