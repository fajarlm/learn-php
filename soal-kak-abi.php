<?php
// no 1
echo "No 1<br>";
for($i= 1;$i<=100;$i++){
    if ($i % 3 == 0 && $i %5 == 0){
        echo "FizzBuzz,<br>";
    }elseif($i % 5 ===0 ){
        echo "Buzz,<br>";
    }elseif($i % 3===0){
        echo " Buzz,<br>";
    }else{
        echo"$i . <br>";
    }
}
echo "<br>";


//no 2
echo "No 2<br>";
for($i=1;$i<=50;$i++){ // angka awal variable i adalah 1 , set sampai kurang dari sama dengan 50 , i increment
    $a = 0; //variable a sama dengan 0
    for($j=1;$j<=$i;$j++){ // angka awal variable j adalah i , jika variable j kurang dari sama dengan (hasil dari variable i) brarti juga 50 , j increment
        if($i % $j == 0){ // jika i dibagi j sama dengan 0 /habis dibagi
            $a++; //// variable a increment
        }
    }
    if($a == 2){ //menyeleksi bilangan prima atau bukan, dikatakan bilangan prima jika bilangan itu hanya bisa dibagi oleh bilangan satu atau dibagi bilangan itu sendiri
     echo $i.''; // mengeluarkan nilai var $i dengan whitespace
    }
}
echo "<br>"; 

// no 3
echo "No 3<br>";
$umur = 9;
if ($umur>=0 && $umur<=13){
    echo "anak -anak";
}elseif ($umur>=13 && $umur <=17){
    echo "remaja";
}elseif ($umur>17 && $umur <=59){
    echo "dewasa";
}else{echo "tua";}
