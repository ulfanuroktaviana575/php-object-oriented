<?php
//STATIS KEYWORD
//class merupakan template dari object 
//namun dengan menggunakan STATIC KEYWORD maka memungkinkan untuk mengakses property dan method dalam konteks class
//tanpa melakukannn instansiasi class


// class contohStatic
// {
//     public static $angka = 1;

//     public static function halo()
//     {
//         return "halo" . self::$angka++ . "kali";
//     }
// }

// echo contohStatic::$angka;
// echo "<br>";
// echo contohStatic::halo();
// echo "<hr>";
// echo contohStatic::halo();

//MEMBER TERIKAT DENGAN CLASS, BUKAN DENGAN OBJECT
//NILAI STATIS AKAN TETAP WALAU OBJECT DIINSTANSIASI BERKALI-KALI
//dengan menggunakan static kode akan terlihat menjadi "procedural"
//biasa digunakan untuk membuat fungsi bantuan / helper
//atau digunakan di class-class utility pada framework(laravel/code igniter)

class contoh
{
    public static $angka = 1;

    public function halo()
    {
        return "hallo" . self::$angka++ . "kali.<br>";
    }
}

$object = new contoh();
echo $object->halo();
echo $object->halo();
echo $object->halo();
echo $object->halo();

echo "<hr>";

$object2 = new contoh();
echo $object2->halo();
echo $object2->halo();
echo $object2->halo();
echo $object2->halo();
