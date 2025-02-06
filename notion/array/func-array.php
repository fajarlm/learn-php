<?php
//fungsi
// Menghitung jumlah array : count
$kendaraan = ['Mobil', 'Motor', 'Sepeda', 'Truk', 'Bus'];
echo 'Ditemukan data sebanyak ' .  count($kendaraan) . ' data';

//Menggabungkan array menjadi string : implode
$arr_kata = ["satu", "dua", "tiga", "empat", "lima"];
$kalimat = implode(", ",$arr_kata);
echo $kalimat;

// Mengubah semua value/item pada array : array_map
function toUpper($array_value) {
	return strtoupper($array_value);
}
$kendaraan 	= ['Mobil', 'Motor', 'Sepeda'];
$upper 		= array_map('toUpper', $kendaraan);
print_r($upper);

// Cek apakah array memiliki value tertentu : in_array
$kendaraan = ['Mobil', 'Motor', 'Sepeda', 'Truk', 'Bus'];
if (in_array('Motor', $kendaraan))
{
	echo 'OK';
}

// Cek apakah array memiliki key tertentu : key_exists
$mobil = ['merk' => 'Toyota', 'type' => 'Vios', 'year' => 2016];
if (key_exists('type', $mobil))
{
	echo $mobil['type'];
}


// asort : Mengurutkan value array : arsort, asort

$kendaraan = ['Mobil', 'Motor', 'Sepeda', 'Truk', 'Bus'];
asort($kendaraan);
print_r($kendaraan);

// arsort : mengurutkan dari yang terbesar ke yang terkecil
$nilai 		= [90, 70, 85, 65];
arsort($nilai);
print_r($nilai);

// Menggabungkan array : array_merge
$kendaraan 		= ['Mobil', 'Motor', 'Sepeda', 'Truk', 'Bus'];
$mobil 			= ['merk' => 'Toyota', 'type' => 'Vios', 'year' => 2016];
$merge			= array_merge ($kendaraan, $mobil);
print_r($merge);

// Mencari index pada value tertentu : array_search
$kendaraan 	= ['Mobil', 'Motor', 'Sepeda', 'Truk', 'Bus'];
$key = array_search('Sepeda', $kendaraan);
unset($kendaraan[$key]);
print_r($kendaraan);

// Menghapus element pertama pada array : array_shift
$mobil 	= ['merk' => 'Toyota', 'type' => 'Vios', 'year' => 2016];
$key 	= array_shift($mobil);
print_r($mobil);

// Menambah element pertama pada array : array_unshift
// Indexed Array
$kendaraan 		= ['Mobil', 'Motor', 'Sepeda'];
array_unshift ($kendaraan, 'Becak',  'Delman');
print_r($kendaraan);

echo "<br />";

// Associative array
$mobil 		= ['merk' => 'Toyota', 'type' => 'Vios', 'year' => 2016];
array_unshift ($mobil, 'Sedan');
print_r($mobil);


// Menambah element terakhir pada array : array_push
$kendaraan 	= ['Mobil', 'Motor', 'Sepeda'];
array_push ($kendaraan, 'Becak', 'Delman');
print_r($kendaraan);

echo "<br />";

$mobil = ['merk' => 'Toyota', 'type' => 'Vios', 'year' => 2016];
array_push ($mobil, 'Sedan');
print_r($mobil);


// Menghapus element terakhir pada array : array_pop
$kendaraan 	= ['Mobil', 'Motor', 'Sepeda'];
$pop 		= array_pop($kendaraan);
print_r($kendaraan);

// Membalik urutan array : array_reverse
$judul 		= ['Judul 3', 'Judul 2', 'Judul 1'];
$reverse	= array_reverse($judul);
print_r($reverse);

// Mencari nilai maksimal dan minimal pada array : max & min
$nilai 	= [90, 70, 85, 65, 80];
$max 	= max($nilai);
$min 	= min($nilai);
echo $max;
echo "<br />";
echo $min;

// Menghapus element dan menggantinya dengan yang baru : array_splice()

$a1=array("red","green","blue","yellow");
$a2=array("purple","orange");
array_splice($a1,0,2,$a2);
print_r($a1);

// Menentukan jumlah semua nilai dalam array : array_sum()
$a=array(5,15,25);
echo array_sum($a);


$nama = 'Desta';
$umur = 30;

echo $nama, $umur;

$nama = 'Agus';
print 'Nama: ' . $nama;

// Ternary
print $nama == 'Agus' ? 'Benar' : 'Salah'; // Hasil Benar

// ERROR
$list_nama	= array('Alfa', 'Beta', 'Charlie');
print $list_nama;


$siswa = array(
    'nama' 		=> array ('Alfa', 'Beta', 'Charlie'),
    'jurusan' 	=> 'Informatika',
    'semester'	=> array (1, 3)
);
 
print_r($siswa);


$nama = 'Agus';
var_dump ($nama); // Hasil: string(4) "Agus"

$siswa = array(
			'nama' 		=> array ('Alfa', 'Beta', 'Charlie'),
			'jurusan' 	=> 'Informatika',
			'semester'	=> 1,
			1 => 'Jakarta',
			2 => 'Surabaya'
		);
		 
echo '<pre>';  var_dump($siswa); echo '</pre>';