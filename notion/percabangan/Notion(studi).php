<?php
//no 1
echo "No 1 <br>";
$baju = false;
if($baju){
	echo "Variable baju bernilai true<hr>"; 
}else{
    echo "Variable baju bernilai false<hr>"; 
}

//no 2
echo "No 2 <br>";
$nilai = 70 ;
if ($nilai >=90 && $nilai <=100){
    echo "anda mendapatkan nilai A";
}elseif ($nilai >=80 && $nilai <=90){
    echo "anda mendapatkan B";
}elseif ($nilai >=70 && $nilai <=80){
    echo "anda mendapatkan Peringkat C";
}else{
    echo "anda mendapatkan peringkat D";
}
echo "<hr>";

