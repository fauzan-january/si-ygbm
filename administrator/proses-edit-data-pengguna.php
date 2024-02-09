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
$email=$_POST['email'];
$password=$_POST['password'];
$new_password=md5($_POST['password']);
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

    header("location:data-pengguna.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>