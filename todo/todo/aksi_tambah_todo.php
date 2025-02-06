<?php
include "../config.php";
$tugas=$_POST['tugas'];
$jangka_waktu=$_POST['jangka_waktu'];
$keterangan=$_POST['keterangan'];
$sql=" insert into tbtodo (tugas,jangka_waktu,keterangan) values ('$tugas','$jangka_waktu','$keterangan')";

//echo $sql;
mysqli_query($mysqli,$sql);
header("location:http:/dbtodo/todo/index.php?halaman=todo&pesan_berhasil_tambah=berhasil");
?>