<?php

//objek dapat digunakan menjadi sebuah tipe object
class produk
{
    public $judul = "judul", $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = "harga";

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga")
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

class cetakInfoProduk
{
    public function cetak(produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    }
}

$produk1 = new produk("naruto", "namaskimi", "shonen trump", 40000);
$produk2 = new produk("mencintaimu dalam diam", "ulfah nur oktaviana", "ganesh", 80000);

echo "Film   >>>" . $produk1->getLabel();
echo "<br>";
echo "Komi   >>>k" . $produk2->getLabel();

$cetakinfoproduk = new cetakInfoProduk();
echo $cetakinfoproduk->cetak($produk1);
