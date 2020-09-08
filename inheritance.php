<?php
class produk{
public $namabarang,
       $merk,
       $harga,
       $ukuranLayar,
       $kapasitas;

    public function getCetak(){
        return "$this->merk, (Rp $this->harga)";
    }
    public function __construct($namaBarang="nama barang", $merk="merk", $harga=0, $ukuranLayar="ukuran layar", $kapasitas="kapasitas"){
        $this->namaBarang = $namaBarang;
        $this->merk=$merk;
        $this->harga=$harga;
        $this->ukuranLayar=$ukuranLayar;
        $this->kapasitas=$kapasitas;
    }

    public function cetakInfo(){
        $str="{$this->namaBarang}, {$this->getCetak()}";
        return $str;
    }
}

class laptop extends produk{
    public function cetakInfo(){
        $str="Laptop :{$this->namaBarang}, {$this->getCetak()} | Ukuran Layar : {$this->ukuranLayar}";
        return $str;
    }
}

class Aksesoris extends produk{
    public function cetakInfo(){
        $str="Aksesoris :{$this->namaBarang}, {$this->getCetak()} | kapasitas : {$this->kapasitas}";
        return $str;
    }
}
$produk1 = new Laptop("Vivobook 14","ASUS",8000000,"14 inch","-");
$produk2 = new Aksesoris("SSD 256gb","XPG",800000, "-","256 Gb");


echo $produk1->cetakInfo();
echo "<br>";
echo $produk2->cetakInfo();
echo "<br>";
?>