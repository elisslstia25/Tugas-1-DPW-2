<?php


class animal {
    public $jumlah_kaki, $bisa_terbang;
}

class Ayam extends animal 
{
    function bersuara ()
    {
        return "Berkokok (Kukuruyukkkk)";
    }
}

class Bebek extends animal 
{
    function bersuara ()
    {
        return "Menguik (kwek kwek)";
    }
}

class Kambing extends animal 
{
    function bersuara ()
    {
        return "Mengembek (embekkk..)";
    }
}

class Nyamuk extends animal 
{
    function bersuara ()
    {
        return "Berdenging (nging..nging..nging..)";
    }
}

// Ayam
$Erden = new Ayam;
$Erden->jumlah_kaki = 2;
$Erden->bisa_terbang = "Tidak Bisa Terbang";

echo "Erden Adalah Ayam <br>";
echo "Punya Kaki Sebanyak: " . $Erden->jumlah_kaki . "<br>";
echo $Erden->bisa_terbang . "<br>";
echo "Suaranya: " . $Erden->bersuara() . "<br>";


echo "<hr>";

// Bebek
$Lucy = new Bebek;
$Lucy->jumlah_kaki = 2;
$Lucy->bisa_terbang = "Tidak Bisa Terbang";

echo "Lucy Adalah Bebek <br>";
echo "Punya Kaki Sebanyak: " . $Lucy->jumlah_kaki . "<br>";
echo $Lucy->bisa_terbang . "<br>";
echo "Suaranya: " . $Lucy->bersuara() . "<br>";

echo "<hr>";

// Kambing
$Aldi = new Kambing;
$Aldi->jumlah_kaki = 4;
$Aldi->bisa_terbang = "Tidak Bisa Terbang";

echo "Aldi Adalah Kambing <br>";
echo "Punya Kaki Sebanyak: " . $Aldi->jumlah_kaki . "<br>";
echo $Aldi->bisa_terbang . "<br>";
echo "Suaranya: " . $Aldi->bersuara() . "<br>";

echo "<hr>";

// Nyamuk
$Ina = new Nyamuk;
$Ina->jumlah_kaki = 6;
$Ina->bisa_terbang = "Bisa Terbang";

echo "Ina Adalah Nyamuk <br>";
echo "Punya Kaki Sebanyak: " . $Ina->jumlah_kaki . "<br>";
echo $Ina->bisa_terbang . "<br>";
echo "Suaranya: " . $Ina->bersuara() . "<br>";

echo "<hr>";
