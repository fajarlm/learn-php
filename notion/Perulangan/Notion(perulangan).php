<?php 
//no 1 (hanya mencoba)
for ($i = 1; $i <= 10; $i++) {
    echo "{$i} <br>";
}
for ($i = 10; $i > 0; $i--) {
    echo "{$i} <br>";
}

// no 2 hanya mengubah count$list menjadi 1
$list = ['RPL', 'Wajib', 'Ngulik'];

for ($i = 0; $i < 1; $i++) {

    echo "{$list[$i]} <br>";
}

//no 3 pertanyaan

# inisialisasi variabel tidak harus dari angka 0
for ($i = 1; $i <= 50; $i++) {
    if ($i % 10 === 0) {
      continue; # skip perulangan jika nilai $i habis dibagi 10
    }
    
    echo "Perulangan ke-{$i} <br>";

    if ($i > 40) {
      break; # hentikan perulangan jika $i lebih dari 40
    }
}

//no 4 mengubah $key menjadi kunci
$list = ['RPL', 'Wajib', 'Ngulik'];

foreach ($list as $Kunci => $lis) {
    echo "[{$Kunci}] Nama : {$lis} <br>";
}
?>