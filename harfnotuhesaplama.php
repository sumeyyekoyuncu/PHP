<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harf Notu Hesaplama</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
    }
    form {
        width: 300px;
        margin: 0 auto;
    }
    input[type="number"] {
        width: 100%;
        padding: 8px;
        margin: 5px 0;
        box-sizing: border-box;
    }
    input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
    }
    #sonuc {
        margin-top: 20px;
        padding: 10px;
        border: 1px solid #ccc;
        background-color: #f9f9f9;
    }
</style>
<body>

<form method="post">
    <label>Vize notunuzu giriniz</label>
    <input type="number" name="vize" required>
    <br><br><br>
    <label>Final notunuzu giriniz</label>
    <input type="number" name="final" required><br><br><br>
    <input type="submit" value="Gönder">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vize = $_POST["vize"];
    $final = $_POST["final"];
    $ortalama = ($vize * 0.4) + ($final * 0.6);
    echo "<div id='sonuc'>";
    echo "Ortalamanız: " . number_format($ortalama, 2);
    if ($ortalama >= 90) {
        echo "<br>Tebrikler dersten geçtiniz! Harf notunuz: AA";
    } elseif ($ortalama >= 85) {
        echo "<br>Tebrikler dersten geçtiniz! Harf notunuz: BA";
    } elseif ($ortalama >= 70) {
        echo "<br>Tebrikler dersten geçtiniz! Harf notunuz: BB";
    } elseif ($ortalama >= 60) {
        echo "<br>Tebrikler dersten geçtiniz! Harf notunuz: CB";
    } elseif ($ortalama >= 50) {
        echo "<br>Tebrikler dersten geçtiniz! Harf notunuz: CC";
    } elseif ($ortalama >= 45) {
        echo "<br>Tebrikler dersten geçtiniz! Harf notunuz: DD";
    } else {
        echo "<br>Dersten kaldınız Harf notunuz: FF";
    }
    echo "</div>";
}
?>

</body>
</html>
