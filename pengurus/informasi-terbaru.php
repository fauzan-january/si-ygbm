<?php
  //session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>

<?php
include "../koneksi.php";

if ($koneksi->connect_error) {
    die("Gagal terhubung ke database: " . $koneksi->connect_error);
}

// Ambil semua postingan dari database
$query = "SELECT id, judul, oleh, tanggal, isi FROM informasi ORDER BY tanggal DESC";
$result = $koneksi->query($query);

// Cek apakah ada postingan
if ($result->num_rows > 0) {
    // Tampilkan setiap postingan dengan separator
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $judul = $row["judul"];
        $oleh = $row["oleh"];
        $tanggal = $row["tanggal"];
        $isi = $row["isi"];

        echo '<div class="card mb-3">';
        echo '<div class="card-body">';
        echo '<h3 class="card-title"><a href="detail-informasi.php?id=' . $id . '">' . $judul . '</a></h3>';
        echo '<p class="card-text">Di posting oleh: ' . $oleh . ', pada ' . $tanggal . '</p>';
        echo '</div>';
        echo '</div>';
        echo '<hr>'; // Tambahkan separator antara postingan
    }
} else {
    echo '<div class="alert alert-info" role="alert">Belum ada informasi terbaru saat ini. 🙏☺ </div>';
}

$koneksi->close();
?>