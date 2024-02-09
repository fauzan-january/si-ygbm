<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>

<?php

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

include "../koneksi.php";

$simpan=$koneksi->query("insert into pengurus(nama,tempat_lahir,tanggal_lahir,alamat,jenis_kelamin,agama,pendidikan_terakhir,kegiatan_sekarang,nomor_telepon,email,nomor_kepengurusan,status_jabatan) 
                        values ('$nama', '$tempat_lahir', '$tanggal_lahir', '$alamat', '$jenis_kelamin', '$agama', '$pendidikan_terakhir', '$kegiatan_sekarang', '$nomor_telepon', '$email', '$nomor_kepengurusan', '$status_jabatan')");

if($simpan==true){

    header("location:data-pengurus.php?pesan=inputBerhasil");
} else{
    echo "Error";
}

?>