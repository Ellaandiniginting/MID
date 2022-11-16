<!doctype HTML>
<html>
<head>
    <title>INPUT DATA GURU</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><center><b>INPUT DATA GURU</b></center></h1>
                <form action="proses-input.php" method="POST">
                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="number" name="nip" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama_guru">NAMA GURU</label>
                        <input type="text" name="nama_guru" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin">JENIS KELAMIN</label>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="laki-laki">LAKI - LAKI</option>
                            <option value="perempuan">PEREMPUAN</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="alamat">ALAMAT</label>
                        <textarea name="alamat" class="form-control"></textarea>
                    </div>

                     <div class="form-group">
                        <label for="no_telepon">NO TELEPON</label>
                        <input type="text" name="no_telepon" class="form-control">
                    </div>

                     <div class="form-group">
                        <label for="status_aktif">STATUS AKTIF</label>
                        <select name="status_aktif" class="form-control">
                            <option value="YES">YES</option>
                            <option value="NO">NO</option>
                        </select>
                    </div>

                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>