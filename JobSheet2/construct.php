<?php
class mahasiswa
{
    private $nim;
    private $nama;
    private $alamat;

    function __construct()
    {
        echo "Saya Mahasiswa Teknik Informatika";
        echo "<br>";
    }

    function tampil_nama()
    {
        return "Nama saya Fajar Ganzzz";
    }

    function tampil_alamat()
    {
        return "Saya Tinggal di Konoha";
    }

    function tampil_mahasiswa()
    {
        return "Tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah";
    }

    function __destruct()
    {
        echo "Politeknik Negeri Cilacap";
    }
}

$fajar = new mahasiswa();
echo $fajar->tampil_nama();
echo "<br>";
echo $fajar->tampil_mahasiswa();
echo "<br>";
