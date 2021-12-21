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

    public function getLabel(){            //method
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
    }


}

$produk1 = new Produk ("Naruto" , "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk ("Uncharted" , "Neil Druckmann" , "Sony Computer", 25000);
$produk3 = new Produk ("Arifin", "Alianso");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
echo "coba : " . $produk3->getLabel();

?>