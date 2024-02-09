<?php
session_start();
include "koneksi.php";
$username = $koneksi->real_escape_string($_POST['username']);
$password = $koneksi->real_escape_string(md5($_POST['password']));

$sql = $koneksi->query("SELECT * FROM pengguna WHERE username = '$username' AND password = '$password'");
$row = $sql->fetch_assoc();
$result = $sql->num_rows;

if ($result == 1) {
    $status = $row['status'];
    $user_id = $row['user_id'];
    $token = md5($username . $password);
    date_default_timezone_set('Asia/Jakarta');
    //$last_login = date('Y-m-d H:i:s');
    $koneksi->query("UPDATE pengguna SET last_login = now(), token = '$token' WHERE user_id = '$user_id'");

    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['username'] = $row['username'];

    if ($status == 'Administrator') {
        header("Location: administrator/index.php");
        exit();
    } elseif ($status == 'Pengurus') {
        header("Location: pengurus/index.php");
        exit();
    } else {
        echo "Status pengguna tidak valid";
    }
} else {
    $error_message = "Nama pengguna atau kata sandi yang anda masukkan salah! <br> Silahkan di periksa kembali dan lebih teliti, ya...";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Nama pengguna atau kata sandi yang anda masukkan salah!</title>
</head>
<body>
    <?php if(isset($error_message)): ?>
        <div style="background-color: red; color: white; padding: 10px;"><?php echo $error_message; ?></div>
    <?php endif; ?>

    <button><a href="index.php">Coba Lagi</a> </button>
    <!-- Form login -->
</body>
</html>