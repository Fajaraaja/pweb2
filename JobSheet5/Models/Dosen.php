<?php

class Dosen
{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getAllDosen()
    {
        $query = "SELECT * FROM dosen";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createDosen($nama, $nidn, $alamat)
    {
        $query = "INSERT INTO dosen (nama,nidn,alamat)
        VALUES('$nama', '$nidn','$alamat')";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function getDosenbyId($id)
    {
        $query = "SELECT * FROM dosen where id = $id";
        $result = mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updateDosen($id, $nama, $nidn, $alamat)
    {
        $query = "UPDATE dosen set nama = '$nama', nidn = '$nidn', alamat = '$alamat' where id='$id'";

        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteDosen($id)
    {
        $query = "DELETE FROM dosen where id = $id";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
