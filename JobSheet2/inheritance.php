<?php

class manusia
{
    public $nama_saya;

    function panggil_nama($saya)
    {
        return $this->nama_saya = $saya;
    }
}

class mahasiswa extends manusia
{
    public $nama_mahasiswa;

    function panggil_mahasiswa($mahasiswa)
    {
        return $this->nama_mahasiswa = $mahasiswa;
    }
}

//instansiasi class mahasiswa
$fajar = new mahasiswa();

$fajar->panggil_nama("Fajar");
$fajar->panggil_mahasiswa("Dwi Junianto");

echo "Nama Depan saya " . $fajar->nama_saya . "</br>";
echo "Nama Belakang saya " . $fajar->nama_mahasiswa . "</br>";

echo "KELAS PROTECTED <br>";
//Class Protected
class hewan
{
    protected $nama_hewan;

    function panggil_hewan($hewan)
    {
        return $this->nama_hewan = $hewan;
    }
    // Menambahkan fungsi getter agar nama_hewan bisa diakses diluar class hewan atau sub class nya yaitu kucing
    function getNamaHewan()
    {
        return $this->nama_hewan;
    }

    protected function suara()
    {
        return "Miawww";
    }
}

class kucing extends hewan
{
    protected $ras;
    function panggil_ras($ras_kucing)
    {
        return $this->ras = $ras_kucing;
    }

    function getras()
    {
        return $this->ras;
    }
}

$kucheng = new kucing();
$kucheng->panggil_hewan("Kucing");
$kucheng->panggil_ras("Anggora");

echo "Hewan itu bernama " . $kucheng->getNamaHewan() . "<br>";
echo "Hewan itu bernama " . $kucheng->getras();
//echo $kucheng->suara();


echo "<br>";
echo "KELAS PRIVATE <br>";
//Class Private
class Kendaraan
{
    private $merk;
    private $tahun;

    public function __construct($merk, $tahun)
    {
        $this->merk = $merk;
        $this->tahun = $tahun;
    }

    public function getMerk()
    {
        return $this->merk;
    }

    public function getTahun()
    {
        return $this->tahun;
    }
}

class Mobil extends Kendaraan
{
    private $jumlah_pintu;

    public function __construct($merk, $tahun, $jumlah_pintu)
    {
        parent::__construct($merk, $tahun);
        $this->jumlah_pintu = $jumlah_pintu;
    }

    private function informasiMobil()
    {
        return "Merk Mobil: " . $this->getMerk() . "<br>" .
            "Tahun Produksi: " . $this->getTahun() . "<br>" .
            "Jumlah Pintu: " . $this->jumlah_pintu . "<br>";
    }
    //Supaya informasiMobil bisa diakses diluar class kita perlu membuat 1 kelas public untuk mengembalikan nilai fungsi informasi mobil
    public function tampilkanInformasiMobil()
    {
        return $this->informasiMobil();
    }
}

$mobil = new Mobil("Toyota", 2020, 4);

echo $mobil->tampilkanInformasiMobil();
