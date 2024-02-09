<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['pengurus_id'];
$nama=$_POST['nama'];
$tempat_lahir=$_POST['tempat_lahir'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$alamat=$_POST['alamat'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$agama=$_POST['agama'];
$pendidikan_terakhir=$_POST['pendidikan_terakhir'];
$kegiatan_sekarang=$_POST['kegiatan_sekarang'];
$nomor_telepon=$_POST['nomor_telepon'];
$email=$_POST['email'];
$nomor_kepengurusan=$_POST['nomor_kepengurusan'];
$status_jabatan=$_POST['status_jabatan'];

$ubah=$koneksi->query("update pengurus set nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama', pendidikan_terakhir='$pendidikan_terakhir', kegiatan_sekarang='$kegiatan_sekarang', nomor_telepon='$nomor_telepon', email='$email', nomor_kepengurusan='$nomor_kepengurusan', status_jabatan='$status_jabatan' where pengurus_id='$id'");

if($ubah==true){

    header("location:data-pengurus.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>