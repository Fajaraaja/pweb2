<?php
include '../classes/database.php';
$db = new database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $db->tambah_mhs($_POST['nama'], $_POST['nim'], $_POST['alamat']);
    header("location:tampil_mahasiswa.php?tambah=true");
} elseif ($aksi == "update") {
    $db->update($_POST['id'], $_POST['nama'], $_POST['nim'], $_POST['alamat']);
    header("location:tampil_mahasiswa.php");
} elseif ($aksi == "hapus") {
    $db->hapus($_GET['id']);
    header("location:tampil_mahasiswa.php?id=$id&delete=true");
}
