<?php
//no 1
echo "No 1:<br>";
for ($i = 1; $i <=50; $i++) {
    echo "$i, ";
}
echo "<br>";
echo "<br>";

//no 2
echo "No 2:<br>";
for ($i = 1; $i <=50; $i++) {
    if ($i % 2 == 0){
        continue;
    }
    echo " $i, ";
}
echo "<br>";
echo "<br>";

echo "No 2 cara yang beda:<br>";
for ($i = 1; $i <=50; $i+=2) {
    echo " $i, ";
}
echo "<br>";
echo "<br>";

//no 3
echo "No 3:<br>";
for ($i = 1; $i <=50; $i++) {
    if ($i %2 ==0){
        echo "$i, ";
    }
}
echo "</br>";
echo "</br>";

echo "No 3 cara yang beda:<br>";
for ($i = 0; $i <=50; $i+=2) {
    echo "$i, ";
}
echo "</br>";
echo "</br>";

//no 4
echo "No 4:<br>";
for ($i = 1; $i <=50; $i++){
    if ($i %2 ==0){
        echo "genap : $i <br>";
    }else{
        echo "ganjil : $i <br>"; 
    }
}
echo "</br>";
echo "</br>";

//no 5
echo "No 5:<br>";

$ray =[];
for ($i = 1; $i<=20; $i++){
    $ray[] = $i;
}

foreach($ray as $angka){
    echo "$angka ";
}
$angka = array_sum($ray);//mengjumlahkan aray
$banyak = count($ray);//menghitung banyak nya jumlah di aray
$count = $angka/$banyak;
$min = min($ray);
$max = max($ray);
echo "ini adalah angka dari looping = ";
echo ($angka);
echo "<br>ini adalah angka minimum = [$min] ";
echo "<br>ini adalah angka maximum = [$max]";
echo "<br>ini adalah rata-ratanya = [$count]";


?>
