<?php

include "koneksi.php";

$id=$_POST['guru_id'];
$nip=$_POST['nip'];
$nama_guru=$_POST['nama_guru'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$no_telepon=$_POST['no_telepon'];
$status_aktif=$_POST['status_aktif'];

$ubah=$koneksi->query("update guru set nip='$nip', nama_guru='$nama_guru', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_telepon='$no_telepon', status_aktif='$status_aktif' where guru_id='$id'");

if($ubah==true){

    header("location:menampilkan.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>