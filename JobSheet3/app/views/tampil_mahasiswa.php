<?php
include '../classes/database.php';
$db = new database();
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


<div class="card-body">
    <h5 class="card-title">Daftar Mahasiswa</h5>
    <a href="input_mhs.php" class="btn btn-success btn-sm">Tambah Mahasiswa</a>
    <br>
    <br>
    <table class="table table-striped" style="width : 70%">
        <tr>
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
                    <a href="edit_mhs.php?id=<?php echo $x['id']; ?>&aksi=edit" class=" btn btn-warning btn-sm" style="border-radius: 4px; padding: 4px; flex: 1; width:30%;">Edit</a>
                    <a href="proses_mhs.php?id=<?php echo $x['id']; ?>&aksi=edit" class="btn btn-danger btn-sm" style="border-radius: 4px; padding: 4px; flex: 1; width:30%;">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>