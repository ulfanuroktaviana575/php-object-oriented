 <?php

    //objek dapat digunakan menjadi sebuah tipe object

    //PENGERTIAN INHERITANCE
    //sebuah konsep untuk menciptakan hierarki antar kelas (Parent & Child)
    //Child Class, mewarisi semua property dan method dari parent-nya (yang visible >> yang dapat diakses oleh child class)
    //Child Class, memperluas (enxtends) fungsionalitas dari parent-nya

    use function PHPSTORM_META\type;

    class produk
    {
        public $judul,
            $penulis,
            $penerbit,
            $hargga,
            $jumlahHalaman,
            $waktuMain;


        public function __construct(
            $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = "harga",
            $jumlahHalaman = 0,
            $waktuMain = 0
        ) {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jumlahHalaman = $jumlahHalaman;
            $this->waktuMain = $waktuMain;
        }

        public function getLabel()
        {
            return "$this->penulis, $this->penerbit";
        }

        public function getInfoProduk()
        {
            //komik : Naruto |mashashi Kisimoto, Shonen Jump (Rp.30000)-100 Halaman.
            $strr = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
            return $strr;
        }
    }

    class komik extends produk
    {
        public function getInfoProduk()
        {
            $strr = " komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})  - {$this->jumlahHalaman} Halaman.";

            return $strr;
        }
    }

    class game extends produk
    {
        public function getInfoProduk()
        {
            $strr = " game :{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam.";

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

    $produk1 = new komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0);
    $produk2 = new game("UNCHARTED", "Neil Druckman", "Sony Computer", 250000, 0, 50);


    echo $produk1->getInfoProduk();
    echo "<br>";
    echo $produk2->getInfoProduk();

    //inheritance

    //komik : Naruto |mashashi Kisimoto, Shonen Jump (Rp.30000)-100 Halaman.
    //Game : Uncharted | Neil Druckmann, Sony Computer (Rp. 25000) - 50 jam.
