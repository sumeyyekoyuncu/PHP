

<?php
$sayi;
for( $sayi = 1; $sayi < 100; $sayi++ ){
    $asalmi=true;
for ($i = 2; $i < $sayi; $i++) {
if($sayi%$i==0){
    $asalmi=false;
}
}
if($asalmi==true){
    echo $sayi . " ";
}
}


?>