<?php

class mahasiswa
{
    public $nama;
    private $nim = "08110731";


    public function tampilkan_nama()
    {
        return "Nama saya adalah Fajar Dwi Junianto <br>";
    }
    function tampilkan_nim()
    {
        return "NIM saya " . $this->nim;
    }
}
// Instansiasi objek dari kelas mahasiswa kedalam variable $fajar
$fajar = new mahasiswa();
//Memanggil method tampilkan_nama();
echo $fajar->tampilkan_nama();
echo $fajar->tampilkan_nim();
