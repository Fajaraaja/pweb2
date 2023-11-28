<?php
include_once '../../config.php';
include_once '../../Controllers/MahasiswaController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];

    $mahasiswaController = new MahasiswaController($db);
    $result = $mahasiswaController->createMahasiswa($nama, $nim, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat);

    if ($result) {
        header("location:mahasiswa");
    } else {
        header("location:tambahmahasiswa");
    }
}
