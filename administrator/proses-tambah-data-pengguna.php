<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$username=$_POST['username'];
$email=$_POST['email'];
$password=md5($_POST['username']);
$token=md5($username.$password);
$status=$_POST['status'];
$nomor_kepengurusan=$_POST['nomor_kepengurusan'];

include "../koneksi.php";

$simpan=$koneksi->query("insert into pengguna(username,email,password,token,status,nomor_kepengurusan,last_login) 
                        values ('$username', '$email', '$password', '$token','$status','$nomor_kepengurusan',now())");

if($simpan==true){

    header("location:data-pengguna.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>