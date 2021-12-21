
<?php 
// constant hammpir sama dengan variabel, tetapi kalau constant nilainya akan tetap sampai akhir 

define('NAMA', 'ArifinS'); // define di gunakkan untuk global, tidak bisa di gunakan di dalam class
echo NAMA;

echo "<br>"; 

const UMUR = 32; // const bisa dimasukkan dalama class / object oriented
echo UMUR;

class coba {
    const NAMA = "Arifin";
}
echo "<br>";
echo coba::NAMA; // memanggil const pada class
?>
