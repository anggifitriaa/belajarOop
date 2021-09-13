<?php
{
    //mengdefinisikan sebuah class
    class kucing
    {
        //membuat property atau attributs
        public $warna;

        //membuat method (behaviour / )
        public function __construct($warna)
        {
            $this->warna = $warna;
        }
        public function bersuara()
        {
            return "meown...meong...meong...";
        }
        public function berburu()
        {
            return "berburu ikan";
        }
    }
}

//membuat object (inisiasi object)
$kucing1 = new kucing("hitam");
echo "warna kucing 1: " . $kucing1->warna . "<br>";
$kucing2 = new kucing("oren");
echo "warna kucing 2: " . $kucing2->warna . "<br>";
