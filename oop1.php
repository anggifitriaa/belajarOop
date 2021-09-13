<?php
{
    
    // mendefinisikan sebuah class
    class kucing
    {
        
        // membuat property atau attributes
        public $warna ="coklat";
        public $jumlaKaki =4;
        public $jenisBulu ="panjang";
        public $makananFavorit ="ikan pindang";
        
        // membuat method (behaviour)
        public function bersuara(){
            return "meong.... meong.... meong....";
        }
        public function berburu(){
            return "berburu ikan";
        }
    }

    // membuat object (inisiasi object)
    $kucing1 = new Kucing();
    echo "warna kucing : " . $kucing1->warna ."<br>";
    echo "sifat kucing : " . $kucing1->bersuara() ."<hr>";

    $kucing2 = new Kucing();
    // set warna kucing
    $kucing2->warna = "oren";
    echo "warna kucing : " . $kucing1->warna ."<br>";
    echo "sifat kucing : " . $kucing1->bersuara() ."<br>";
}
?>