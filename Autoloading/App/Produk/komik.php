<?php 
    class komik extends produk implements infoProduk
    {
        public $jumlahHalaman;

        public function __construct(
            $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = "harga",
            $jumlahHalaman = 0
        ) {
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->jumlahHalaman = $jumlahHalaman;
        }

        public function getInfoProduk()
        {
            $strr = " komik :" . $this->getInfo() . " - {$this->jumlahHalaman} Halaman.";

            return $strr;
        }
        public function getInfo()
        {
            //komik : Naruto |mashashi Kisimoto, Shonen Jump (Rp.30000)-100 Halaman.
            $strr = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
            return $strr;
        }
    }
