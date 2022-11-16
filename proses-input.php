<?php

$nip=$_POST['nip'];
$nama_guru=$_POST['nama_guru'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$no_telepon=$_POST['no_telepon'];
$status_aktif=$_POST['status_aktif'];

include "koneksi.php";

$simpan=$koneksi->query("insert into guru(nip,nama_guru,jenis_kelamin,alamat,no_telepon,status_aktif) 
            values ('$nip', '$nama_guru', '$jenis_kelamin', '$alamat', '$no_telepon', '$status_aktif')");

if($simpan==true){

    header("location:menampilkan.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>