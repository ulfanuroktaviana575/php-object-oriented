<?php

//visibilities >> access mofifier (public, private)
//class >>blueprint 
//property >>apa yang dimiliki oleh kelas (variabel)
//method >>sifat dari class
//object >>instances


class produk
{
    public $judul = "judul", $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = "harga";


    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new produk();
// $produk1->judul = "naruto";
// var_dump($produk1);

// $produk2 = new produk();
// $produk2->judul = "uncharted";
// $produk2->tambahProperty = "tambah aja";
// var_dump($produk2);

$produk3 = new produk();
$produk3->judul = "barbie";
$produk3->penulis = "ulfah";
$produk3->penerbit = "ganesha";
$produk3->harga = 50000;

// var_dump($produk3);

// echo "komik : penulis = $produk3->penulis, judul : $produk3->judul  ";
// echo "<br>";
// echo $produk3->getLabel();


echo "<hr>";
$produk4 = new produk();
$produk4->judul = "uncharted";
$produk4->penulis = "indra";
$produk4->penerbit = "ganesha";
$produk4->harga = 14000;
echo "Film" . $produk3->getLabel();
echo "<br>";
echo "Komik" . $produk4->getLabel();
