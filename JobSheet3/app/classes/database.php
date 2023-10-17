<?php
class database
{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $db = "akademik";
    var $koneksi;

    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db);
    }

    function tampil_mahasiswa()
    {
        $data = mysqli_query($this->koneksi, "select * from mahasiswa");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    function tambah_mhs($nama, $nim, $alamat)
    {
        mysqli_query($this->koneksi, "insert into mahasiswa (nama, nim, alamat) values ('$nama', '$nim', '$alamat')");
    }

    function edit($id)
    {
        $data = mysqli_query($this->koneksi, "select * from mahasiswa where id = '$id'");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }

    function update($id, $nama, $nim, $alamat)
    {
        mysqli_query($this->koneksi, "update mahasiswa set nama = '$nama', nim = '$nim', alamat = '$alamat' where id = '$id'");
    }

    function hapus($id)
    {
        mysqli_query($this->koneksi, "delete from mahasiswa where id = '$id'");
    }

    function tampil_dosen()
    {
        $data_dosen = mysqli_query($this->koneksi, "select * from dosen");
        $hasil_dosen = array();
        while ($e = mysqli_fetch_array($data_dosen)) {
            $hasil_dosen[] = $e;
        }
        return $hasil_dosen;
    }

    function tambah_dosen($nama, $nidn, $alamat)
    {
        mysqli_query($this->koneksi, "insert into dosen (nama, nidn, alamat) values ('$nama', '$nidn', '$alamat')");
    }

    function hapus_dosen($id)
    {
        mysqli_query($this->koneksi, "delete from dosen where id = '$id'");
    }

    function update_dosen($id, $nama, $nidn, $alamat)
    {
        mysqli_query($this->koneksi, "update dosen set nama = '$nama', nidn = '$nidn', alamat = '$alamat' where id = '$id'");
    }

    function edit_dosen($id)
    {
        $data = mysqli_query($this->koneksi, "select * from dosen where id = '$id'");
        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }
        return $hasil;
    }
}
