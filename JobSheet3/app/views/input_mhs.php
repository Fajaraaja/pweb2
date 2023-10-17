<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit data Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<br>
<div class="col-12 px-3 py-2">
    <div class="card-body">
        <h3>Tambah Data Mahasiswa</h3>
        <form action="proses_mhs.php?aksi=tambah" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" class="form-control"></td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td><input type="number" name="nim" class="form-control"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><textarea name="alamat" cols="30" rows="5" class="form-control"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="py-2">
                        <a href="tampil_mahasiswa.php" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>