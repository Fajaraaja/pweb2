<?php
include '../classes/database.php';
$db = new database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $db->tambah_dosen($_POST['nama'], $_POST['nidn'], $_POST['alamat']);
    header("location:tampil_dosen.php?tambah=true");
} elseif ($aksi == "update") {
    $db->update_dosen($_POST['id'], $_POST['nama'], $_POST['nidn'], $_POST['alamat']);
    header("location:tampil_dosen.php?id=$id&update=true");
} elseif ($aksi == "hapus") {
    $db->hapus_dosen($_GET['id']);
    header("location:tampil_dosen.php?id=$id&delete=true");
}
