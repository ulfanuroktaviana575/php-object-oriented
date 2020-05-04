<?php
require_once 'App/init.php';

$produk1 = new komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new game("UNCHARTED", "Neil Druckman", "Sony Computer", 250000, 50);
$daftarProduk = new cetakInfoProduk();

$daftarProduk->tambahProduk($produk1);
$daftarProduk->tambahProduk($produk1);
$daftarProduk->tambahProduk($produk1);
$daftarProduk->tambahProduk($produk1);
$daftarProduk->tambahProduk($produk1);
echo $daftarProduk->cetak();

echo "<hr>";

new coba();
