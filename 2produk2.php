<?php 
class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga;
           
    public function __construct ($a = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
        $this->judul = $a;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel(){          // method
        return "$this->penulis, $this->penerbit";
    }


}

class CetakInfoProduk {
    public function cetak($test  /* parameter */){
        $str = "{$test->judul} | {$test->getLabel()} (Rp. {$test->harga} )";
        return $str;
    }
}

$produk1 = new Produk ("Naruto" , "Masashi Kishimoto", "Shonen Jump", 30000);  //object
$produk2 = new Produk ("Uncharted" , "Neil Druckmann" , "Sony Computer", 25000); //object
$produk3 = new Produk ("Arifin"); // object 

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
echo "coba : " . $produk3->getLabel();
echo "<br>";
$infoProduk1 = new CetakInfoProduk ();
echo $infoProduk1->cetak($produk1);
echo "<br>";
echo $infoProduk1->cetak($produk2);
echo "<br>";
echo $infoProduk1->cetak($produk3);



?>