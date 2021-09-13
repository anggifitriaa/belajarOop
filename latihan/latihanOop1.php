<?php

{
    class komputer
    {
        public  $merk ="iphone";
        public  $pemilik="anggi";
        public  $ukuranLayar=7;
        public  $jk="perempuan";
        public  $alamat="kp.babakan cilebak";
        
        
        public function menyala(){
            return "nyala";
        }
        public function mati(){
            return "mati";
        }
    }
    $komputer1 = new komputer();
    echo "1." . "<br>";
    echo"DATA PEMILIK<br>";
    echo "Merk komputer : " . $komputer1->merk . "<br>";
    echo "Pemilik : " . $komputer1->pemilik . "<br>";
    echo "Ukuran layar : " . $komputer1->ukuranLayar . "<br>";
    echo "Jenis kelamin : " . $komputer1->jk . "<br>";
    echo "Alamat : " . $komputer1->alamat . "<br>";
    echo "Sifat komputer " . $komputer1->menyala() . "<br><hr>";

    $komputer2 = new komputer();
    echo "2." . "<br>";
    echo"DATA PEMILIK<br>";
    $komputer2->pemilik = "Alya nurlia";
    $komputer2->alamat = "nata endah";
    echo "Merk komputer : " . $komputer2->merk . "<br>";
    echo "Pemilik : " . $komputer2->pemilik . "<br>";
    echo "Ukuran layar : " . $komputer2->ukuranLayar . "<br>";
    echo "Jenis kelamin : " . $komputer2->jk . "<br>";
    echo "Alamat : " . $komputer2->alamat . "<br>";
    echo "Sifat komputer " . $komputer2->mati() . "<br><hr>";

    $komputer2 = new komputer();
    echo "3." . "<br>";
    echo"DATA PEMILIK<br>";
    $komputer2->pemilik = "Arif muhamad iqbal";
    $komputer2->alamat = "cibedug";
    $komputer2->merk = "Asus";
    echo "Merk komputer : " . $komputer2->merk . "<br>";
    echo "Pemilik : " . $komputer2->pemilik . "<br>";
    echo "Ukuran layar : " . $komputer2->ukuranLayar . "<br>";
    echo "Jenis kelamin : " . $komputer2->jk . "<br>";
    echo "Alamat : " . $komputer2->alamat . "<br>";
    echo "Sifat komputer " . $komputer2->menyala() . "<br><hr>";

    $komputer2 = new komputer();
    echo "4." . "<br>";
    echo"DATA PEMILIK<br>";
    $komputer2->pemilik = "Anisa andriani";
    $komputer2->alamat = "Bojong";
    $komputer2->merk = "HP";
    echo "Merk komputer : " . $komputer2->merk . "<br>";
    echo "Pemilik : " . $komputer2->pemilik . "<br>";
    echo "Ukuran layar : " . $komputer2->ukuranLayar . "<br>";
    echo "Jenis kelamin : " . $komputer2->jk . "<br>";
    echo "Alamat : " . $komputer2->alamat . "<br>";
    echo "Sifat komputer " . $komputer2->mati() . "<br><hr>";

    $komputer2 = new komputer();
    echo "5." . "<br>";
    echo"DATA PEMILIK<br>";
    $komputer2->pemilik = "Norman burhanuddin";
    $komputer2->alamat = "Bmi";
    $komputer2->merk = "Asus";
    echo "Merk komputer : " . $komputer2->merk . "<br>";
    echo "Pemilik : " . $komputer2->pemilik . "<br>";
    echo "Ukuran layar : " . $komputer2->ukuranLayar . "<br>";
    echo "Jenis kelamin : " . $komputer2->jk . "<br>";
    echo "Alamat : " . $komputer2->alamat . "<br>";
    echo "Sifat komputer " . $komputer2->Mati() . "<br><hr>";


}
?>