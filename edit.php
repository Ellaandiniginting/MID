<!doctype HTML>
<html>
<head>
    <title>EDIT DATA GURU</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><center><b>EDIT DATA GURU</b></center></h1>
                <form action="proses-edit.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "koneksi.php";
                $tampil=$koneksi->query("select * from guru where guru_id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="hidden" name="guru_id" value="<?php echo $row['guru_id']?>" class="form-control">
                        <input type="number" name="nip" value="<?php echo $row['nip']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama_guru">NAMA GURU</label>
                        <input type="text" name="nama_guru" value="<?php echo $row['nama_guru']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin">JENIS KELAMIN</label>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="<?php echo $row['jenis_kelamin']?>" selected><?php echo $row['jenis_kelamin']?></option>
                            <option value="laki-laki">LAKI - LAKI</option>
                            <option value="perempuan">PEREMPUAN</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="alamat">ALAMAT</label>
                        <textarea name="alamat" class="form-control"><?php echo $row['alamat']?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="no_telepon">NO TELEPON</label>
                        <input type="text" name="no_telepon" value="<?php echo $row['no_telepon']?>" class="form-control">
                    </div>

                     <div class="form-group">
                        <label for="status_aktif">STATUS AKTIF</label>
                        <select name="status_aktif" class="form-control">
                            <option value="<?php echo $row['status_aktif']?>" selected><?php echo $row['status_aktif']?></option>
                            <option value="YES">YES</option>
                            <option value="NO">NO</option>
                        </select>
                    </div>

                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>