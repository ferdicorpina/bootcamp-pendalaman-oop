<?php

abstract class Hewan
{
    public $nama, $darah = 50, $jumlahKaki, $keahlian;

    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    public function  atraksi()
    {
        return $this->nama . ' sedang ' . $this->keahlian;
    }

    abstract public function getInfoHewan();

    public function getInfo()
    {
        $str =  'Nama : ' . $this->nama;
                'Darah : ' . $this->darah;
                'Jumlah kaki : ' . $this->jumlahKaki;
                'Keahlian : ' . $this->keahlian;
        return $str;
    }

}

trait Fight
{
    public $attackPower, $defencePower;

    public function serang($hewan)
    {
        echo $this->nama . ' sedang menyerang ' . $hewan->nama . '\n';
        echo '=================================' . '\n';;
    }

    public function diserang($hewan)
    {
        $this->darah = $this->darah - ($hewan->attackPower / $this->defencePower);
        
        echo $this->nama . ' sedang diserang ' . $hewan->nama . '\n';
        echo 'Darah ' . $this->nama . ' tersisa : ' . $this->darah . '\n';
    }
}


class Elang extends Hewan
{
    use Fight;

    public function __construct($nama)
    {
        parent::__construct($nama);
        $this->jumlahKaki = 2;
        $this->keahlian = 'terbang tinggi';
        $this->attackPower = 10;
        $this->defensePower = 5;
    }

    public function getInfoHewan()
    {
        $str =  '======ELANG======' . "\n";
                parent::getInfo() . "\n";
                'Attach power : ' . $this->attackPower . "\n";
                'Defense power : ' . $this->defensePower . "\n";
        return $str;
    }

}

class Harimau extends Hewan
{
    use Fight;

    public function __construct($nama)
    {
        parent::__construct($nama);
        $this->jumlahKaki = 4;
        $this->keahlian = 'lari cepat';
        $this->attackPower = 7;
        $this->defensePower = 8;
    }

    public function getInfoHewan()
    {
        $str =  '======HARIMAU======' . "\n";
                parent::getInfo() . "\n";
                'Attach power : ' . $this->attackPower . "\n";
                'Defense power : ' . $this->defensePower . "\n";
        return $str;
    }
}


$elang = new Elang('Elang Sumatra');
echo $elang->getInfoHewan();
echo '<br>';

$harimau = new Harimau('Harimau Jawa');
echo $harimau->getInfoHewan();
echo '<br>';


?>