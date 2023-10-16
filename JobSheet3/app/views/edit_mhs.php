 <?php
    include '../classes/database.php';
    $db = new database();

    $id_mahasiswa = $_GET['id'];
    foreach ($db->edit($id_mahasiswa) as $d) {
    ?>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

     <div class="col-12">
         <div class="card-body">
             <h3>Edit Data Mahasiswa</h3>
             <form action="proses_mhs.php?aksi=update" method="post">
                 <table>
                     <tr>
                         <td>Nama</td>
                         <td>
                             <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                             <input type="text" name="nama" value="<?php echo $d['nama'] ?>" class="form-control">
                         </td>
                     </tr>
                     <tr>
                         <td>NIM</td>
                         <td><input type="number" name="nim" value="<?php echo $d['nim'] ?>" class="form-control"></td>
                     </tr>
                     <tr>
                         <td>Alamat</td>
                         <td><textarea name="alamat" cols="30" rows="5" class="form-control"><?php echo $d['alamat'] ?></textarea></td>
                     </tr>
                     <tr>
                         <td></td>
                         <td>
                             <button type="submit" class="btn btn-primary btn-sm" style="border-radius: 4px; padding: 4px; flex: 1; width:30%;">Simpan</button>
                         </td>
                     </tr>
                 </table>
             </form>

         </div>
     </div>

     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <?php
    }
    ?>