<?php

$list = ['RPL', 'Wajib', 'Ngulik'];

foreach ($list as $l) {
    echo "Nama : {$l} <br>";
}
$list = ['RPL', 'Wajib', 'Ngulik'];

for ($i = 0; $i < count($list); $i++) {

    echo "{$list[$i]} <br>";
}
$i = 0 ;
while ($i<=10){
    $i++;
    echo "$i";
}