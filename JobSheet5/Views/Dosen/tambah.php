<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah data Dosen</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<br>
<div class="col-12 px-3 py-2">
    <div class="card-body">
        <h3>Tambah Data Dosen</h3>
        <form action="prosesdosen" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" class="form-control" style="margin-left: 5%"></td>
                </tr>
                <tr>
                    <td>NIDN</td>
                    <td><input type="number" name="nidn" class="form-control" style="margin-left: 5%"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><textarea name="alamat" cols="30" rows="5" class="form-control" style="margin-left: 5%"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td class=" py-2">
                        <a href="dosen" class="btn btn-secondary" style="margin-left: 5%">Kembali</a>
                        <button type=" submit" name="submit" class="btn btn-primary">Simpan</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>