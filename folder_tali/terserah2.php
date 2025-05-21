<?php
 $nilai_php =85;
 $nilai_php =92;
 switch (true){
    case($nilai_php>=90):
        echo"Nilai PHP:A";
        break;
    case($nilai_php>=80):
        echo"Nilai PHP:B";
        break;
    case($nilai_php>=70):
        echo"nilai PHP:C";
        break;
      default:
      echo"nilai PHP:D";
     
      


 }
 ?>
  <br/>

  <?php
    $i=2;
    while( $i <=40){
        echo "perulangan ke -".$i."<br/>";
        $i+=2;
    }
    ?>
<br/>

<?php
$nama = array ("ajim", "amin", "fizi", "upin");
foreach ($nama as $val){
    echo "$val";
    echo "<br />";

}
?>
<br/>


<?php
  for( $i=1;$i <=6; $i++){
    if($i==5){
        break;
    }
      echo "nilai i : ".$i."<br />";
     
}
echo "perulangan selesai<br>";
  ?>

<br/>

<?php
  for( $i=1;$i <=6; $i++){
    if($i==3){
        continue;
    }
      echo "ini istri ke : ".$i."<br/>";
     
  }
  echo "perulangan selesai<br>";
  ?>

<br/>

<?php
  for( $i=1;$i <=6; $i++){
    if($i == 3){
        exit();
    }
      echo "nilai i : ".$i."<br/>";
     
  }
  echo "perulangan selesai<br>";
  ?>
  <?php
  function perkalian ($bil1, $bil2){
    $hasil= $bil1 * $bil2;
    return $hasil;

  }
  echo "5 x 10 = ". perkalian (5, 10);
  ?>
<?php

function hitungdiskon($totalbelanja) {
    $diskon =0 ;
    if ($totalbelanja >=100000) {
        $diskon = 0.1 * $totalbelanja;
    } elseif ($totalbelanja >=50000) {
        $diskon = 0.05 * $totalbelanja;
    }
    return $diskon;
    
}
echo" totalbelanja ; Rp. " . $totalbelanja . "<br>";
echo"diskon : Rp. ". $diskon . "<br>";
echo "total yang harus dibayar :Rp. ". ($totalbelanja - $diskon) . "<br>";
?>