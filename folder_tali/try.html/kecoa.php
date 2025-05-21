<?php
$tinggi=0;
$hari=0;
$totTinggi=0;

do{
    $tinggi +=4;
    $hari++;
    if ($tinggi >=$totTinggi){
        break;
    }
    $tinggi-=2
;
}
while (true);

echo "dibutuhkan waktu $hari hari agar kecoa sampai ke bibie sumur.";
?>