<?php
//Memanggil Class model database
include_once '../../config.php';
include_once '../../Controllers/DosenController.php';
require '../../index.php';

$database = new database;
$db = $database->getKoneksi();


$dosenController = new DosenController($db);
$dosen = $dosenController->getAllDosen();

?>

<body>
    <div class="card-body px-5 py-2">
        <h3 class="card-title py-2">Daftar Dosen</h3>
        <a href="tambahdosen" class="btn btn-primary btn-sm mb-3">+ Tambah Dosen</a>
        <table class="table table-striped table-bordered">
            <tr class="table-secondary" style="text-align : center">
                <td>No</td>
                <td>Nama</td>
                <td>NIDN</td>
                <td>Alamat</td>
                <td>Aksi</td>
            </tr>
            <?php
            $no = 1;
            foreach ($dosen as $x) {
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $x['nama'] ?></td>
                    <td><?php echo $x['nidn'] ?></td>
                    <td><?php echo $x['alamat'] ?></td>

                    <td>
                        <a href="editdosen?id=<?php echo $x['id']; ?>" class=" btn btn-warning btn-sm" style="border-radius: 4px; padding: 4px; flex: 1; width:40%;">Edit</a>
                        <a href="hapusdosen?id=<?php echo $x['id']; ?>" class="btn btn-danger btn-sm" style="border-radius: 4px; padding: 4px; flex: 1; width:40%;" onClick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>