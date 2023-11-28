<?php

include_once '../../Models/Mahasiswa.php';

class MahasiswaController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new Mahasiswa($db);
    }

    public function getAllMahasiswa()
    {
        return $this->model->getAllMahasiswa();
    }


    public function createMahasiswa($nama, $nim, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat)
    {
        return $this->model->createMahasiswa($nama, $nim, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat);
    }

    public function getMahasiswabyId($id)
    {
        return $this->model->getMahasiswabyId($id);
    }

    public function updateMahasiswa($id, $nama, $nim, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat)
    {
        return $this->model->updateMahasiswa($id, $nama, $nim, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat);
    }

    public function deleteMahasiswa($id)
    {
        return $this->model->deleteMahasiswa($id);
    }
}
