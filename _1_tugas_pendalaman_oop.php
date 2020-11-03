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

    public function serang($hewan)
    {
        return $this->nama . ' menyerang ' . $hewan->nama;
    }

    public function diserang($hewan)
    {
        $this->darah = $this->darah - ($this->attackPower / $this->defencePower);
        return $this->nama . ' diserang ' . $hewan->nama;
    }
}


class Elang
{
    use Hewan;
    use Fight;

    public function getInfoHewan()
    {
        return $this->nama . ' memiliki jumlah kaki ' . $this->jumlahKaki . ' dan mempunyai keahliah ' . $this->keahlian;
    }

}

class Harimau
{
    use Hewan;
    use Fight;

    public function getInfoHewan()
    {
        return $this->nama . ' memiliki jumlah kaki ' . $this->jumlahKaki . ' dan mempunyai keahliah ' . $this->keahlian; 
    }
}


$elang = new Elang();
$elang->nama = 'Elang';
$elang->jumlahKaki = 2;
$elang->keahlian = 'terbang tinggi';
$elang->attackPower = 10;
$elang->defencePower = 5;
echo $elang->getInfoHewan();
echo '<br>';

$harimau = new Harimau();
$harimau->nama = 'Harimau';
$harimau->jumlahKaki = 4;
$harimau->keahlian = 'lari cepat';
$harimau->attackPower = 7;
$harimau->deffencePower = 8;
echo $harimau->getInfoHewan();
echo '<br>';


?>