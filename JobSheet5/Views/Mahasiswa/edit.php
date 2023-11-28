<?php
include_once '../../config.php';
include_once '../../Controllers/MahasiswaController.php';
$database = new database;
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$mahasiswaController = new MahasiswaController($db);
$mahasiswaData = $mahasiswaController->getMahasiswabyId($id);

if ($mahasiswaData) {
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $alamat = $_POST['alamat'];

        $result = $mahasiswaController->updateMahasiswa($id, $nama, $nim, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat);

        if ($result) {
            header("location:mahasiswa");
        } else {
            header("location:edit");
        }
    }
} else {
    echo "Mahasiswa Tidak Ditemukan";
}
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<br>

<?php
if ($mahasiswaData) {
?>
    <div class="col-12 px-3 py-2">
        <div class="card-body">
            <h3>Edit Data Mahasiswa</h3>
            <form action="" method="post">
                <table>
                    <?php foreach ($mahasiswaData as $d => $value) {
                        $displayName = str_replace('_', ' ', $d);   //Untuk mengubah underscore(_) jadi spasi
                        $displayName = ucwords($displayName);   //Untuk Membuat CamelCase di $d

                        if ($d === 'id' || $d === 'program_studi') {    // FUngsi untuk hide row table yang tidak dipakai
                            continue;
                        } ?>
                        <tr>
                            <td><?php echo $displayName; ?></td>
                            <td>
                                <?php if ($d === 'tanggal_lahir') { ?>
                                    <input type="date" name="<?php echo $d; ?>" value="<?php echo $value; ?>" class="form-control" style="margin-left: 5%">
                                <?php } elseif ($d === 'nim') { ?>
                                    <input type="number" name="<?php echo $d; ?>" value="<?php echo $value; ?>" class="form-control" style="margin-left: 5%">
                                <?php } elseif ($d === 'alamat') { ?>
                                    <textarea name="<?php echo $d; ?>" cols="30" rows="5" class="form-control" style="margin-left: 5%"><?php echo $value; ?></textarea>
                                <?php } elseif ($d === 'jenis_kelamin' || $d === 'agama') { ?>
                                    <select name="<?php echo $d; ?>" class="form-control" style="margin-left: 5%;">
                                        <option value="" disabled selected>Pilih <?php echo $displayName; ?></option>
                                        <?php
                                        $options = [];
                                        if ($d === 'jenis_kelamin') {
                                            $options = ['Laki-Laki', 'Perempuan'];
                                        } elseif ($d === 'agama') {
                                            $options = ['Islam', 'Katolik', 'Kristen', 'Hindu', 'Budha', 'Konghucu'];
                                        }
                                        foreach ($options as $option) {                 //Loop untuk menampilkan Array option jenis kelamin dan agama
                                            echo '<option value="' . $option . '"';
                                            if ($option === $value) {
                                                echo ' selected';
                                            }
                                            echo '>' . $option . '</option>';
                                        }
                                        ?>
                                    </select>
                                <?php } else { ?>
                                    <input type="text" name="<?php echo $d; ?>" value="<?php echo $value; ?>" class="form-control" style="margin-left: 5%">
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <td></td>
                        <td class=" py-2">
                            <a href="mahasiswa" class="btn btn-secondary" style="margin-left: 5%">Kembali</a>
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