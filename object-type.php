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
        return "$this->penulis, $this->penerbit, $this->harga";
    }
}

class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 3000);
$produk2 = new Produk("Unsharted", "Neil Druckman", "Sony Computer", 25000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
$infoPorduk1 = new CetakInfoProduk();
echo $infoPorduk1->cetak($produk1);
?>