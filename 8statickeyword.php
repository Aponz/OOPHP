<?php 


// Jika menggunakan static nilai nya tidak akan di reset menjadi satu 
class contohStatic {

    public static $angka = 1;

    public function halo(){
        return "Halo ". self::$angka++ . " Kali. <br> ";
    }
}

$obj = new contohStatic;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new contohStatic;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();

echo "<hr>";

// Jika function menggunakan static

class contohFuncStatic {

    public static $angka = 1;

    public static function halo(){
        return "Halo ". self::$angka++ . " Kali. <br> ";
    }
}

echo contohFuncStatic::$angka;
echo "<br>";
echo contohFuncStatic::halo();
echo contohFuncStatic::halo();
echo "<hr>";





// Cara biasa 

class contoh {
    public $angka = 1;

    public function halo(){
        return " Halo " . $this->angka++ .  " Kali. <br> ";
    }
}

$obj = new contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
?>