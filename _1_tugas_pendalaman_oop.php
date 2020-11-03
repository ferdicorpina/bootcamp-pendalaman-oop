<?php

trait Hewan
{
    public $nama;
    public $darah = 50;
    public $jumlahKaki;
    public $keahlian;

    public function  atraksi()
    {
        return $this->nama . ' sedang ' . $this->keahlian;
    }

}

trait Fight
{
    public $attackPower;
    public $defencePower;

    public function serang()
    {

    }

    public function diserang()
    {
        
    }
}


class Elang
{
    use Hewan;
    use Flight;

    public function getInfoHewan()
    {

    }

}

class Harimau
{
    use Hewan;
    use Flight;

    public function getInfoHewan()
    {
        
    }
}


$elang = new Elang();
$elang->jumlahKaki = 2;
$elang->keahlian = 'terbang tinggi';
$elang->attackPower = 10;
$elang->defencePower = 5;

$harimau = new Harimau();
$harimau->jumlahKaki = 4;
$harimau->keahlian = 'lari cepat';
$harimau->attackPower = 7;
$harimau->deffencePower = 8;

?>