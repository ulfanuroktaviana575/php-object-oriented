<?php
abstract class hewan
{
    protected $nama, $family, $makanan, $habitat, $caraBerkembangbiak;

    public function __construct($nama, $family, $makanan, $habitat, $caraBerkembangbiak)
    {
        $this->nama = $nama;
        $this->family = $family;
        $this->makanan = $makanan;
        $this->habitat = $habitat;
        $this->caraBerkembangbiak = $caraBerkembangbiak;
    }

    public function getPanggilan()
    {
        return "NAMA => $this->nama, Family : $this->family";
    }

    public function getInformasi()
    {
        return " {$this->getPanggilan()} Makanan : {$this->makanan} | Habitat : {$this->habitat} | Cara Berkembangbiak : {$this->caraBerkembangbiak}";
    }

    abstract public function getInfo();
    abstract public function setNama($nama);
    abstract public function getNama();
    abstract public function setFamily($family);
    abstract public function getfamily();
    abstract public function setMakanan($makanan);
    abstract public function getMakanan();
}

class lumba_lumba extends hewan
{
    protected $BanyakSirip = 0;

    public function __construct($nama, $family, $makanan, $habitat, $caraBerkembangbiak, $BanyakSirip)
    {
        parent::__construct($nama, $family, $makanan,  $habitat, $caraBerkembangbiak);
        $this->BanyakSirip = $BanyakSirip;
    }

    public function getInfo()
    {
        return "LUMBA-LUMBA : {$this->getInformasi()} , {$this->BanyakSirip}";
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setFamily($family)
    {
        $this->family = $family;
    }

    public function getFamily()
    {
        return $this->family;
    }

    public function setMakanan($makanan)
    {
        $this->makanan = $makanan;
    }

    public function getMakanan()
    {
        return $this->makanan;
    }
}

class kelinci extends hewan
{
    private $banyakKaki = 6;

    public function __construct($nama, $family, $makanan, $habitat, $caraBerkembangbiak, $banyakKaki = 6)
    {
        parent::__construct($nama, $family,  $makanan, $habitat, $caraBerkembangbiak);
        $this->BanyakSirip = $banyakKaki;
    }

    public function getInfo()
    {
        return "KELINCI : {$this->getInformasi()} , {$this->banyakKaki}";
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setFamily($family)
    {
        $this->family = $family;
    }

    public function getFamily()
    {
        return $this->family;
    }

    public function setMakanan($makanan)
    {
        $this->makanan = $makanan;
    }

    public function getMakanan()
    {
        return $this->makanan;
    }
}
?>

<html>
<H1>LUMBA-LUMBA PINTAR</H1>

</html>

<?php
$lumbaLumba = new lumba_lumba("lumba-lumba", "delphinidae", "ikan", "laut", "beranak", 2);
echo $lumbaLumba->getInfo();
echo "<br>";
$lumbaLumba->setNama("SMART");
echo $lumbaLumba->getInfo();

?>

<html>
<H1>KELINCI LUCU</H1>

</html>

<?php
$kelinci = new kelinci("kelinci", "Leporidae", "tanaman", "darat", "beranak");
echo $kelinci->getInfo();
?>