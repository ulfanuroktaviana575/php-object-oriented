 <?php

    //objek dapat digunakan menjadi sebuah tipe object

    use function PHPSTORM_META\type;

    class produk
    {
        public $judul, $penulis,
            $penerbit,
            $hargga, $jumlahHalaman, $waktuMain, $tipe;

        public function __construct(
            $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = "harga",
            $jumlahHalaman = 0,
            $waktuMain = 0,
            $type
        ) {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jumlahHalaman = $jumlahHalaman;
            $this->waktuMain = $waktuMain;
            $this->type = $type;
        }

        public function getLabel()
        {
            return "$this->penulis, $this->penerbit";
        }

        public function getInfoLengkap()
        {
            //komik : Naruto |mashashi Kisimoto, Shonen Jump (Rp.30000)-100 Halaman.
            $strr = "{$this->type} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

            if ($this->type == "Komik") {
                $strr .= "- {$this->jumlahHalaman} Halaman.";
            } else if ($this->type == "Game") {
                $strr .= "- {$this->waktuMain} Jam.";
            }
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

    $produk1 = new produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");
    $produk2 = new produk("UNCHARTED", "Neil Druckman", "Sony Computer", 250000, 0, 50, "Game");


    echo $produk1->getInfoLengkap();
    echo "<br>";
    echo $produk2->getInfoLengkap();

    //inheritance

    //komik : Naruto |mashashi Kisimoto, Shonen Jump (Rp.30000)-100 Halaman.
    //Game : Uncharted | Neil Druckmann, Sony Computer (Rp. 25000) - 50 jam.
