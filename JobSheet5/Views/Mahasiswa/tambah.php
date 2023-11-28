<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah data Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<br>
<div class="col-12 px-3 py-2">
    <div class="card-body">
        <h3>Tambah Data Mahasiswa</h3>
        <form action="prosesmahasiswa" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" class="form-control" style="margin-left: 5%"></td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td><input type="number" name="nim" class="form-control" style="margin-left: 5%"></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td><input type="text" name="tempat_lahir" class="form-control" style="margin-left: 5%"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><input type="date" name="tanggal_lahir" class="form-control" style="margin-left: 5%"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <select name=" jenis_kelamin" id="" class="form-control" style="margin-left: 5%">
                            <option value="" disabled selected>Pilih Jenis Kelamin</option>
                            <option value=" Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>
                        <select name="agama" id="" class="form-control" style="margin-left: 5%;">
                            <option value="" disabled selected>Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghucu</option>

                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><textarea name="alamat" cols="30" rows="5" class="form-control" style="margin-left: 5%"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td class=" py-2">
                        <a href="mahasiswa" class="btn btn-secondary" style="margin-left: 5%">Kembali</a>
                        <button type=" submit" name="submit" class="btn btn-primary">Simpan</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>