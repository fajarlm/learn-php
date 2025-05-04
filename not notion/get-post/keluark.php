<?php
$ahun = $_POST['tahun'];
if($ahun % 400 == 0 ){
    echo "tahun kabisat tahun=$ahun<br> ";
}else if($ahun %100 == 0 && $ahun % 400 != 0){
    echo "ini bukan tahun kabisat tahun=$ahun <br>";
}else if ($ahun %4 == 0){
    echo "ini tahun kabisat = $ahun <br>";
}else{
    echo "ini tahun biasa = $ahun<br>";
}
