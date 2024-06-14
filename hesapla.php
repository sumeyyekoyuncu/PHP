<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vize = $_POST['vize'];
    $final = $_POST['final'];
    
    // Ortalama hesaplama
    $ortalama = ($vize * 0.4) + ($final * 0.6);
    
    // Harf notu belirleme
    if($ortalama >= 90) {
        $harf_notu = "AA";
    } elseif ($ortalama >= 85) {
        $harf_notu = "BA";
    } elseif ($ortalama >= 70) {
        $harf_notu = "BB";
    } elseif ($ortalama >= 60) {
        $harf_notu = "CB";
    } elseif ($ortalama >= 50) {
        $harf_notu = "CC";
    } elseif ($ortalama >= 45) {
        $harf_notu = "DD";
    } else {
        $harf_notu = "FF";
    }

   
    $response = array(
        'ortalama' => round($ortalama, 2),
        'harf_notu' => $harf_notu
    );
    
   
    echo json_encode($response);
}
?>
