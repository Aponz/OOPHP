<?php 
class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $wktMain;
           
    public function __construct ($a = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $wktMain = 0)
    {
        $this->judul = $a;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->wktMain = $wktMain;
    }

    public function getLabel(){        // method
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap (){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga} )";

        return $str;
    }
}

class Komik extends Produk{
    public function getInfoLengkap(){
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga} ) {$this->jmlHalaman} Halaman. ";
        return $str;
    }
}

class Game extends Produk{
    public function getInfoLengkap(){
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga} ) ~ {$this->wktMain} Jam. ";
        return $str;
        
    }
}

class CetakInfoProduk {
    public function cetak(Produk $test  /* parameter */){
        $str = "{$test->judul} | {$test->getLabel()} (Rp. {$test->harga} )";
        return $str;
    }
}

$produk1 = new Komik ("Naruto" , "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0);  //object
$produk2 = new Game ("Uncharted" , "Neil Druckmann" , "Sony Computer", 25000, 0, 50); //object
$produk3 = new Produk ("Arifin"); // object 

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
echo "<br>";
echo $produk3->getInfoLengkap();


?>