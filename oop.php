<?php
class Ogrenci {
    // Properties
    public $adi;
    public $soyadi;
    public $ogrencino;
    public $dogumtarihi;

    // Constructor
    public function __construct($adi, $soyadi, $ogrencino, $dogumtarihi) {
        $this->adi = $adi;
        $this->soyadi = $soyadi;
        $this->ogrencino = $ogrencino;
        $this->dogumtarihi = $dogumtarihi;
    }

    // Getter methods
    public function getadi() {
        return $this->adi;
    }

    public function getsoyadi() {
        return $this->soyadi;
    }

    public function getogrencino() {
        return $this->ogrencino;
    }

    public function getdogumtarihi() {
        return $this->dogumtarihi;
    }

    // Setter methods
    public function setadi($adi) {
        $this->adi = $adi;
    }

    public function setsoyadi($soyadi) {
        $this->soyadi = $soyadi;
    }

    public function setogrencino($ogrencino) {
        $this->ogrencino = $ogrencino;
    }

    public function setdogumtarihi($dogumtarihi) {
        $this->dogumtarihi = $dogumtarihi;
    }

    // Method to display student information
    public function bilgilerigoster() {
        return "adi: " . $this->adi . " soyadi: " . $this->soyadi . " ogrenci numarasi: " . $this->ogrencino . " dogum tarihi: " . $this->dogumtarihi;
    }
}

// Create a new student object
$ogrenci = new Ogrenci("Sumeyye", "Koyuncu", "220290049", "18.02.2004");

// Display student information
echo $ogrenci->bilgilerigoster();
?>
