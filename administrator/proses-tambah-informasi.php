<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$judul = $_POST['judul'];
$oleh = $_SESSION['username'];
$tanggal = date('Y-m-d H:i:s', strtotime('now Asia/Jakarta'));
$isi = $_POST['isi'];

include "../koneksi.php";

$simpan=$koneksi->query("insert into informasi(judul,oleh,tanggal,isi) 
                        values ('$judul', '$oleh', '$tanggal', '$isi')");

if($simpan==true){

    header("location:kelola-informasi.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>