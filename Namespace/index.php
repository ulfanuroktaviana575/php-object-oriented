<?php


//Namespace
// mengelompokkan program kedalam package tersendiri atau encapsulation
// alasan terdapat namespace
// php tidak mengizinkan terdapat sebuah class dengan nama yang sama
// STRUCTURE
// namespace Vendor\Namespace\Subnamespace


require_once 'App/init.php';

// $produk1 = new komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
// $produk2 = new game("UNCHARTED", "Neil Druckman", "Sony Computer", 250000, 50);
// $daftarProduk = new cetakInfoProduk();

// $daftarProduk->tambahProduk($produk1);
// $daftarProduk->tambahProduk($produk1);
// $daftarProduk->tambahProduk($produk2);
// $daftarProduk->tambahProduk($produk2);
// $daftarProduk->tambahProduk($produk2);
// echo $daftarProduk->cetak();

echo "<hr>";

use App\Service as Serviseuser;
use App\Produk as ProdukUser;

new Serviseuser\User();
echo "<hr>";
new ProdukUser\User();

// new App\Produk\User();
