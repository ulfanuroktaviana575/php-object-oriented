<?php

//objek dapat digunakan menjadi sebuah tipe object

//PENGERTIAN INHERITANCE
//sebuah konsep untuk menciptakan hierarki antar kelas (Parent & Child)
//Child Class, mewarisi semua property dan method dari parent-nya (yang visible >> yang dapat diakses oleh child class)
//Child Class, memperluas (enxtends) fungsionalitas dari parent-nya

//Pengertian Overidding
//sebuah istilah membuat method dikelas child yang memiliki nama yang sama di kelas parent (menimpa method di klass parent)


abstract class produk
{
    protected $judul,
        $penulis,
        $penerbit,
        $harga;


    public function __construct(
        $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = "harga"
    ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }


    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getInfoProduk();
    abstract public function getHarga();
    abstract public function setHarga($harga);
    abstract public function getPenerbit();
    abstract public function setPenerbit($penerbit);



    public function getInfo()
    {
        //komik : Naruto |mashashi Kisimoto, Shonen Jump (Rp.30000)-100 Halaman.
        $strr = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $strr;
    }
}

//overidding >> . parent::getInfoProduk() 

class komik extends produk
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

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    public function getHarga()
    {
        return $this->harga;
    }

    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }

    public function getInfoProduk()
    {
        $strr = " komik :" . $this->getInfo() . " - {$this->jumlahHalaman} Halaman.";

        return $strr;
    }
}

class game extends produk
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

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    public function getHarga()
    {
        return $this->harga;
    }


    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }

    public function getInfoProduk()
    {
        $strr = " game :" . $this->getInfo() . "- {$this->waktuMain} Jam.";

        return $strr;
    }
}

class cetakInfoProduk
{
    public function cetak(produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    }
}

$produk1 = new komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new game("UNCHARTED", "Neil Druckman", "Sony Computer", 250000, 50);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

echo "<hr>";
$produk1->setHarga(20000);
echo $produk1->getInfoProduk();


//inheritance

//komik : Naruto |mashashi Kisimoto, Shonen Jump (Rp.30000)-100 Halaman.
//Game : Uncharted | Neil Druckmann, Sony Computer (Rp. 25000) - 50 jam.
