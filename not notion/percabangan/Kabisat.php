<?php
// if ($tahun %4 ===0 && $tahun %100 !=0 || $tahun %400 ===0){
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