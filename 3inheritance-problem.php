<?php 
class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $wktMain,
           $tipe;
           
    public function __construct ($a = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $wktMain = 0, $tipe = "tidak terdeteksi")
    {
        $this->judul = $a;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->wktMain = $wktMain;
        $this->tipe = $tipe;
    }

    public function getLabel(){          // method
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap (){
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga} )";
            if ($this->tipe == "Komik") {
                $str .= " - {$this->jmlHalaman} Halaman.";
            } else if ($this->tipe == "Game") {
                $str .= " ~ {$this->wktMain} Jam.";
            }
        return $str;
    }


}

class CetakInfoProduk {
    public function cetak(Produk $test  /* parameter */){
        $str = "{$test->judul} | {$test->getLabel()} (Rp. {$test->harga} )";
        return $str;
    }
}

$produk1 = new Produk ("Naruto" , "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");  //object
$produk2 = new Produk ("Uncharted" , "Neil Druckmann" , "Sony Computer", 25000, 0, 50,"Game"); //object
$produk3 = new Produk ("Arifin" , "","", "" , "" , "" , "Game" ); // object 

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
echo "<br>";
echo $produk3->getInfoLengkap();


// problem nya adalah di angka 0, bagaimana jika product1 atau produk2 itu semakin banyak informasi tambahan, maka akan ribet untuk menambahkan satu persatu
?>