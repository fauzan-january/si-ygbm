<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['id'];
$judul = $_POST['judul'];
$oleh = $_SESSION['username'];
$tanggal = date('Y-m-d H:i:s', strtotime('now Asia/Jakarta'));
$isi = $_POST['isi'];

$ubah=$koneksi->query("update informasi set judul='$judul', oleh='$oleh', tanggal='$tanggal', isi='$isi' where id='$id'");

if($ubah==true){

    header("location:kelola-informasi.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>