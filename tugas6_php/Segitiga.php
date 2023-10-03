<?php
require_once 'abstract.php';
class Segitiga extends Bentuk2D{
    public $alas;
    public $tinggi;
    public function __construct($alas, $tinggi){
        $this-> alas = $alas;
        $this-> tinggi = $tinggi;
    }
    public function namaBidang(){
        $nama = "Segitiga";
        return $nama;
    }
    public function luasBidang(){
        $luas = 0.5 * $this -> alas * $this ->tinggi;
        return $luas;
    }
    public function kelilingBidang(){
        $sisiMiring = sqrt(pow($this->alas, 2) + pow($this->tinggi, 2));
        $keliling = $this->alas + $this->tinggi + $sisiMiring;
        return $keliling;
    }
}
?>