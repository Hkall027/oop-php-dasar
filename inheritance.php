<?php  

// JUALAN PRODUK
// 1. KOMIK
// 2. GAME

use Produk as GlobalProduk;

class Produk {
    public  $judul, 
            $penulis,
            $penerbit,
            $harga,
            $jmHalaman,
            $waktuMain;

    public function __construct( $judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmHalaman = 0, $waktuMain = 0 )
    {
     $this->judul = $judul;
     $this->penulis = $penulis;
     $this->penerbit = $penerbit;
     $this->harga = $harga;
     $this->jmHalaman = $jmHalaman;
     $this->waktuMain = $waktuMain;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
     // Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halamn.
     // Game : Uncharted | Neil Drucmann, Sony Computer (Rp. 25000) ~ 50 Jam.
     $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

     return $str;
    }
}

class komik extends produk {
    public function getInfoProduk() {
     $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmHalaman} Halaman.";
    return $str;
    }
}

class Game extends Produk {
    public function getInfoProduk() {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam.";
       return $str;
       }
}

class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 3000, 100, 0);
$produk2 = new Game("Unsharted", "Neil Druckman", "Sony Computer", 25000, 0, 50);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
?>