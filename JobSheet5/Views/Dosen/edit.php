<?php
//Memanggil Class model database
include_once '../../config.php';
include_once '../../Controllers/DosenController.php';

$database = new database;
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$dosenController = new DosenController($db);
$dosen = $dosenController->getDosenbyId($id);

if ($dosen) {
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $nidn = $_POST['nidn'];
        $alamat = $_POST['alamat'];

        $result = $dosenController->updateDosen($id, $nama, $nidn, $alamat);

        if ($result) {
            header("location:dosen");
        } else {
            header("location:edit");
        }
    }
} else {
    echo "Dosen Tidak Ditemukan";
}
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Dosen</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<br>

<?php
if ($dosen) {
?>
    <div class="col-12 px-3 py-2">
        <div class="card-body">
            <h3>Edit Data Dosen</h3>
            <form action="" method="post">
                <table>
                    <?php foreach ($dosen as $d => $value) {
                        $displayName = str_replace('_', ' ', $d);   //Untuk mengubah underscore(_) jadi spasi
                        $displayName = ucwords($displayName);   //Untuk Membuat CamelCase di $d
                        if ($d === 'id') {    // FUngsi untuk hide row table yang tidak dipakai
                            continue;
                        }
                    ?>
                        <tr>
                            <td><?php echo $displayName; ?></td>
                            <td>

                                <?php if ($d === 'nidn') { ?>
                                    <input type="number" name="<?php echo $d; ?>" value="<?php echo $value; ?>" class="form-control" style="margin-left: 5%">
                                <?php } else { ?>
                                    <input type="text" name="<?php echo $d; ?>" value="<?php echo $value; ?>" class="form-control" style="margin-left: 5%">
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <td></td>
                        <td class=" py-2">
                            <a href="dosen" class="btn btn-secondary" style="margin-left: 5%">Kembali</a>
                            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
<?php
}
?>