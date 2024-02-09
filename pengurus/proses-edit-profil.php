<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>

<?php
include "../koneksi.php";

$id=$_POST['user_id'];
$username=$_POST['username'];
$password=$_POST['password'];
$new_password=md5($_POST['password']);
$email=$_POST['email'];
$status=$_POST['status'];
$nomor_kepengurusan=$_POST['nomor_kepengurusan'];

$sql=$koneksi->query("select * from pengguna where user_id='$id'");
$row=$sql->fetch_assoc();

if($row['password']==$password){
  $ubah=$koneksi->query("update pengguna set username='$username', email='$email', status='$status', nomor_kepengurusan='$nomor_kepengurusan' where user_id='$id'");
} else{
  $ubah=$koneksi->query("update pengguna set username='$username', email='$email', password='$new_password', status='$status', nomor_kepengurusan='$nomor_kepengurusan' where user_id='$id'");
}

if($ubah==true){
  echo"<script>alert('Profil berhasil dirubah!');document.location.href='profil.php';</script>";
} else{
  echo"<script>alert('Profil tidak berhasil dirubah!');document.location.href='profil.php';</script>";
}
?>