<?php
class animal
{
    public $family;
    public $food;
    public $owner;
    public function __construct($family, $food, $owner)
    {
        $this->family = $family;
        $this->food = $food;
        $this->owner = $owner;
    }
    public function get_owner()
    {
        return $this->owner;
    }
    public function getFamily()
    {
        return $this->family;
    }
    public function setFamily($family)
    {
        $this->family = $family;
    }
    public function getFood()
    {
        return $this->food;
    }
    public function setFood($food)
    {
        $this->food = $food;
    }
    public function setOwner($owner)
    {
        $this->owner = $owner;
    }
}

class cow extends animal
{

    public function __construct($family, $food, $owner)
    {
        parent::__construct($family, $food, $owner);
    }
}

class lion extends animal
{

    public function __construct($family, $food, $owner)
    {
        parent::__construct($family, $food, $owner);
    }
}




$objcow = new cow("herbivoras", "grass", "jack");
$objlion = new lion("carnivora", "meat", " ");

echo 'objek sapi     ';
echo 'memiliki family : ' . $objcow->getFamily();
echo PHP_EOL;
echo 'dan memakan jenis makanan :' . $objcow->getFood();
echo PHP_EOL;
echo 'dan own :' . $objcow->get_owner();
echo PHP_EOL;


echo "<br>";

echo 'objek lion    ';
echo 'memiliki family: ' . $objlion->getFamily();
echo PHP_EOL;
echo 'dan memakan jenis makanan :' . $objlion->getFood();
echo PHP_EOL;
