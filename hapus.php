<?php

$id=$_GET['id'];

include "koneksi.php";

$hapus=$koneksi->query("delete from guru where guru_id='$id'");

if($hapus==true){

    header("location:menampilkan.php?pesan=hapusBerhasil");

} else{
    echo "Error";
}


?>