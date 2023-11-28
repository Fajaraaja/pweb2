<?php

include_once '../../Models/Dosen.php';

class DosenController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new Dosen($db);
    }

    public function getAllDosen()
    {
        return $this->model->getAllDosen();
    }

    public function createDosen($nama, $nidn, $alamat)
    {
        return $this->model->createDosen($nama, $nidn, $alamat);
    }
    public function getDosenbyId($id)
    {
        return $this->model->getDosenbyId($id);
    }

    public function updateDosen($id, $nama, $nidn, $alamat)
    {
        return $this->model->updateDosen($id, $nama, $nidn, $alamat);
    }

    public function deleteDosen($id)
    {
        return $this->model->deleteDosen($id);
    }
}
