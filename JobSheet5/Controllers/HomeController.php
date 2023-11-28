<?php
class HomeController
{
    public function home()
    {
        header("location:http://localhost/pweb2/JobSheet5/");
    }
    public function mahasiswa()
    {
        header("location:http://localhost/pweb2/JobSheet5/Views/Mahasiswa/index.php?");
    }
    public function dosen()
    {
        header("location:http://localhost/pweb2/JobSheet5/Views/Dosen/index.php?");
    }
}
