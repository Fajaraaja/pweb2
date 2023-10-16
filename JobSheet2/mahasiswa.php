<?php
class mahasiswa
{
    private $nim;
    private $nama;
    private $alamat;

    function tampil_nama()
    {
        return "Nama saya Fajar Ganzzz";
    }

    function tampil_alamat()
    {
        return "Saya Tinggal di Konoha";
    }
}

$fajar = new mahasiswa();
echo $fajar->tampil_nama();
echo "<br>";
echo $fajar->tampil_alamat();


echo "<br>";
echo "<br>";
echo "<br>";


class dosen
{
    private $nidn;
    private $nama;
    private $prodi;

    function nama_dosen()
    {
        return "Nama saya adalah Fajar";
    }
}

$dosen = new dosen();
echo $dosen->nama_dosen();
