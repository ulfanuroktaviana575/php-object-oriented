 <?php

    //objek dapat digunakan menjadi sebuah tipe object

    //PENGERTIAN INHERITANCE
    //sebuah konsep untuk menciptakan hierarki antar kelas (Parent & Child)
    //Child Class, mewarisi semua property dan method dari parent-nya (yang visible >> yang dapat diakses oleh child class)
    //Child Class, memperluas (enxtends) fungsionalitas dari parent-nya

    //Pengertian Overidding
    //sebuah istilah membuat method dikelas child yang memiliki nama yang sama di kelas parent (menimpa method di klass parent)

    // Pengertian VISIBILITY ()
    //konsep yang digunakan untuk mengatur akses terhadap property atau method pada sebuah objek
    // public >> diakses dimana saja walau diluar kelas
    // protected >> didalam sebuah kelas dan turunannya
    // private >>hanya dapat digunakan didalam sebuah kelas tertentu


    //SETTER AND GETTER (Accessor Method)
    //Mengubah dan Mengambil Nilai


    //ABSTRACT CLASS
    //1. sebuah kelas yang nantinya tidak dapat diinstansiasi
    //2. dapat disebut kelas "abstrak"
    //3.mendefinisikan interface untuk kelasturunannya
    //4. berperan sebagai "kerangka dasar untuk kelas turunannya"
    //5. wajib memiliki minimal 1 method abstract
    //6. digunakan dalam "pewarisan"/inheritance untuk "memaksakan" implementasi method abstract yang sama untuk semua kelas turunannya
    //7. method abstract tidak dapat diisikan . isi dapat dituliskan dalam kelas turunannya

    //kenapa harus menggunakan kelas abstract
    //1. merepresentasikan ide atau konsep dasar
    //2. Composition over inheritance

    //INTERFACE CLASS
    //1. merupakan kelas abstrak yang tidak memiliki implementasi sama sekali
    //2. murni merupakan template untuk kelas turunannya
    //3. tidak boleh memiliki property, hanya deklarasi method saja
    //4. semua method harus dideklarasikan dengan visibility public
    //5. boleh mendeklarasikan __construct() >>jika kelas turunannya wajib terdapat method __construct
    //6. satu kelas boleh mengimplementasikan banyak interface
    //7. dengan menggunakan type-hinting (objek digunakan untuk parameter) dapat melakukan depedency injection
    //8. pada akhirnya akan mencapai polymorphism


    //untuk menggunakannya menggunakan keyword "implements" jika didalam interface terdapat 5 method maka kelas
    //yang mengimplements harus menggunakan seluruh method yang didalam interface (injection)


    interface infoProduk
    {
        public function getInfoProduk();
    }


    abstract class produk
    {
        protected $judul,
            $penulis,
            $penerbit,
            $harga;


        protected $diskon = 0;

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

        public function setJudul($judul)
        {
            if (!is_string($judul)) {
                throw new Exception("harus string woy");
            }
            $this->judul = $judul;
        }

        public function getJudul()
        {
            return $this->judul;
        }

        public function setPenulis($penulis)
        {
            $this->penulis = $penulis;
        }

        public function getPenulis()
        {
            return $this->penulis;
        }

        public function setPenerbit($penerbit)
        {
            $this->penerbit = $penerbit;
        }

        public function getPenerbit()
        {
            return $this->penerbit;
        }

        public function setHarga($harga)
        {
            $this->harga = $harga;
        }

        public function getHarga()
        {
            return $this->harga - ($this->harga * $this->diskon / 100);
        }

        public function getLabel()
        {
            return "$this->penulis, $this->penerbit";
        }

        abstract public function getInfo();
    }

    //overidding >> . parent::getInfoProduk() 

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

    class cetakInfoProduk
    {
        public $daftarProduk = [];

        public function tambahProduk(produk $produk)
        {
            $this->daftarProduk[] = $produk;
        }

        public function cetak()
        {
            $str = "Daftar Produk : <br>";

            foreach ($this->daftarProduk as $p) {
                $str .= "- {$p->getInfoProduk()} <br>";
            }
            return $str;
        }
    }



    $produk1 = new komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
    $produk2 = new game("UNCHARTED", "Neil Druckman", "Sony Computer", 250000, 50);
    $daftarProduk = new cetakInfoProduk();

    $daftarProduk->tambahProduk($produk1);
    $daftarProduk->tambahProduk($produk1);
    $daftarProduk->tambahProduk($produk1);
    $daftarProduk->tambahProduk($produk1);
    $daftarProduk->tambahProduk($produk1);
    echo $daftarProduk->cetak();


    // echo $produk1->getInfoProduk();
    // echo "<br>";
    // echo $produk2->getInfoProduk();

    // echo "<hr>";

    // $produk2->setDiscon(100);
    // echo $produk2->getHarga();

    // echo "<hr>";
    // echo $produk1->getJudul();

    // echo "<hr>";
    // $produk1->setJudul("bismillah");
    // echo $produk1->getJudul();


    // echo "<hr>";
    // $produk1->setPenerbit("GaneshaOperations");
    // echo $produk1->getPenerbit();
    // $produk1->setPenerbit("ulfa lucu");
    // echo $produk1->getPenerbit;

    // echo "<br>";
    // $produk1->setHarga(90000);
    // echo $produk1->getHarga();
