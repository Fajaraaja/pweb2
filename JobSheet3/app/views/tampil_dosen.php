<?php
include 'navbar.php';
include '../classes/database.php';
$db = new database();
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dosen</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<?php
if (isset($_GET['update']) && $_GET['update'] == "true") {
    echo '<div class="alert alert-warning" id="successAlert" style="position: fixed; top: 10%; left: 40%; transform: translate(-20%, -50%); width: 300px; margin: 0 auto; border-radius: 4px; padding: 10px; text-align: center; role="alert">Update Berhasil!</div>';
}
if (isset($_GET['delete']) && $_GET['delete'] == "true") {
    echo '<div class="alert alert-danger" id="successAlert" style="position: fixed; top: 10%; left: 40%; transform: translate(-20%, -50%); width: 300px; margin: 0 auto; border-radius: 4px; padding: 10px; text-align: center; role="alert">Data berhasil dihapus</div>';
}
if (isset($_GET['tambah']) && $_GET['tambah'] == "true") {
    echo '<div class="alert alert-success" id="successAlert" style="position: fixed; top: 10%; left: 40%; transform: translate(-20%, -50%); width: 300px; margin: 0 auto; border-radius: 4px; padding: 10px; text-align: center; role="alert">Berhasil Menambahkan Data!</div>';
}
?>

<div class="card-body px-5 py-2">
    <h3 class="card-title py-2">Daftar Dosen</h3>
    <a href="input_dosen.php" class="btn btn-primary btn-sm mb-3">+ Tambah Data Dosen</a>
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
        foreach ($db->tampil_dosen() as $x) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $x['nama'] ?></td>
                <td><?php echo $x['nidn'] ?></td>
                <td><?php echo $x['alamat'] ?></td>
                <td>
                    <a href="edit_dosen.php?id=<?php echo $x['id']; ?>&aksi=edit" class=" btn btn-warning btn-sm" style="border-radius: 4px; padding: 4px; flex: 1; width:30%;">Edit</a>
                    <a href="proses_dosen.php?id=<?php echo $x['id']; ?>&aksi=hapus" class="btn btn-danger btn-sm" style="border-radius: 4px; padding: 4px; flex: 1; width:30%;">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>
<script>
    function hideAlert() {
        var successAlert = document.getElementById("successAlert");
        if (successAlert) {
            successAlert.style.display = "none";
        }
    }

    var successAlert = document.getElementById("successAlert");
    if (successAlert) {
        successAlert.style.display = "block";

        setTimeout(hideAlert, 2000);
    }
</script>