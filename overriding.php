<?php  

// JUALAN PRODUK
// 1. KOMIK
// 2. GAME

use Produk as GlobalProduk;

class Produk {
    public  $judul, 
            $penulis,
            $penerbit,
            $harga;

    public function __construct( $judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0)
    {
     $this->judul = $judul;
     $this->penulis = $penulis;
     $this->penerbit = $penerbit;
     $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
     $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

     return $str;
    }
}

class Komik extends produk {
    public $jmHalaman;

    public function __construct( $judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmHalaman = 0 )
    {
        parent::__construct( $judul, $penulis, $penerbit, $harga );

        $this->jmHalaman = $jmHalaman;
    }
    
    public function getInfoProduk() {
     $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmHalaman} Halaman.";
    return $str;
    }
}

class Game extends Produk {
    public $waktuMain;

    public function __construct( $judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $waktuMain = 0 )
    {
        parent::__construct( $judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk() {
        $str = "Game : " . parent::getInfoProduk() . " - {$this->waktuMain} Jam.";
       return $str;
       }
}

class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 3000, 100);
$produk2 = new Game("Unsharted", "Neil Druckman", "Sony Computer", 25000, 50);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
?>