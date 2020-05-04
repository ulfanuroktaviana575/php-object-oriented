<?php
require_once 'produk.php';

class game extends produk implements infoProduk
{
    public $waktuMain;

    public function __construct(
        $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = "harga",
        $waktuMain = 0
    ) {

        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk()
    {
        $strr = " game :" . $this->getInfo() . "- {$this->waktuMain} Jam.";

        return $strr;
    }

    public function setDiscon($diskon)
    {
        $this->diskon = $diskon;
    }
    public function getInfo()
    {
        //komik : Naruto |mashashi Kisimoto, Shonen Jump (Rp.30000)-100 Halaman.
        $strr = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $strr;
    }
}
