<?php
include 'Printer.php';
$printer = new Printer();
$buku = $printer->cetakBuku('Cara Efektif Belajar Framework Laravel');
include 'Kurir.php';
$kurir = new Kurir();
$kurir->kirim($buku, 'Bandung');
