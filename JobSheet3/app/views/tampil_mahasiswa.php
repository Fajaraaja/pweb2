<?php
include "navbar.php";
include '../classes/database.php';
$db = new database();
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>


<body>
    <?php

    if (isset($_GET['update']) && $_GET['update'] == "true") {
        echo '<div class="alert alert-warning" id="successAlert" role="alert">Update Berhasil!</div>';
    }
    if (isset($_GET['delete']) && $_GET['delete'] == "true") {
        echo '<div class="alert alert-danger" id="successAlert" role="alert">Berhasil Hapus Data!</div>';
    }
    if (isset($_GET['tambah']) && $_GET['tambah'] == "true") {
        echo '<div class="alert alert-success" id="successAlert" role="alert">Berhasil Menambahkan Data!</div>';
    }
    ?>

    <div class="card-body px-5 py-2">
        <h3 class="card-title py-2">Daftar Mahasiswa</h3>
        <a href="input_mhs.php" class="btn btn-primary btn-sm mb-3">+ Tambah Mahasiswa</a>
        <table class="table table-striped table-bordered">
            <tr class="table-secondary" style="text-align : center">
                <td>No</td>
                <td>Nama</td>
                <td>NIM</td>
                <td>Alamat</td>
                <td>Aksi</td>
            </tr>
            <?php
            $no = 1;
            foreach ($db->tampil_mahasiswa() as $x) {
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $x['nama'] ?></td>
                    <td><?php echo $x['nim'] ?></td>
                    <td><?php echo $x['alamat'] ?></td>
                    <td>
                        <a href="edit_mhs.php?id=<?php echo $x['id']; ?>&aksi=edit" class=" btn btn-warning btn-sm" style="border-radius: 4px; padding: 4px; flex: 1; width:25%;">Edit</a>
                        <a href="proses_mhs.php?id=<?php echo $x['id']; ?>&aksi=hapus" class="btn btn-danger btn-sm" style="border-radius: 4px; padding: 4px; flex: 1; width:25%;">Hapus</a>
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
</body>