<?php
//Memanggil Class model database
include_once '../../config.php';
include_once '../../Controllers/MahasiswaController.php';
require '../../index.php';

$database = new database;
$db = $database->getKoneksi();


$mahasiswaController = new MahasiswaController($db);
$mahasiswa = $mahasiswaController->getAllMahasiswa();

?>

<body>
    <div class="card-body px-5 py-2">
        <h3 class="card-title py-2">Daftar Mahasiswa</h3>
        <a href="tambahmahasiswa" class="btn btn-primary btn-sm mb-3">+ Tambah Mahasiswa</a>
        <table class="table table-striped table-bordered">
            <tr class="table-secondary" style="text-align : center">
                <td>No</td>
                <td>Nama</td>
                <td>NIM</td>
                <td>Tempat Lahir</td>
                <td>Tanggal Lahir</td>
                <td>Jenis Kelamin</td>
                <td>Agama</td>
                <td>Alamat</td>
                <td>Aksi</td>
            </tr>
            <?php
            $no = 1;
            foreach ($mahasiswa as $x) {
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $x['nama'] ?></td>
                    <td><?php echo $x['nim'] ?></td>
                    <td><?php echo $x['tempat_lahir'] ?></td>
                    <td><?php echo $x['tanggal_lahir'] ?></td>
                    <td><?php echo $x['jenis_kelamin'] ?></td>
                    <td><?php echo $x['agama'] ?></td>
                    <td><?php echo $x['alamat'] ?></td>

                    <td>
                        <a href="editmahasiswa?id=<?php echo $x['id']; ?>" class=" btn btn-warning btn-sm" style="border-radius: 4px; padding: 4px; flex: 1; width:40%;">Edit</a>
                        <a href="hapusmahasiswa?id=<?php echo $x['id']; ?>" class="btn btn-danger btn-sm" style="border-radius: 4px; padding: 4px; flex: 1; width:40%;" onClick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>