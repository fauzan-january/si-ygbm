<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
<div class="container mt-4">
		<div class="row">
			<div class="col-md-8">
				<?php
				include "../koneksi.php";

				if ($koneksi->connect_error) {
				    die("Gagal terhubung ke database: " . $koneksi->connect_error);
				}

				// Ambil ID postingan dari parameter URL
				$id = isset($_GET['id']) ? $_GET['id'] : '';

				// Ambil postingan dari database berdasarkan ID
				$query = "SELECT judul, oleh, tanggal, isi FROM informasi WHERE id = '$id'";
				$result = $koneksi->query($query);

				if ($result->num_rows > 0) {
				    $row = $result->fetch_assoc();
				    $judul = $row["judul"];
				    $oleh = $row["oleh"];
				    $tanggal = $row["tanggal"];
				    $isi = $row["isi"];

				    echo '<div class="card mb-3">';
				    echo '<div class="card-body">';
				    echo '<h3 class="card-title">' . $judul . '</h3>';
				    echo '<p class="card-text">Di posting oleh: ' . $oleh . ', pada ' . $tanggal . '</p>';
				    echo '<p class="card-text">' . nl2br($isi) . '</p>'; // Menampilkan isi postingan dengan mempertahankan baris baru
				    echo '</div>';
				    echo '</div>';
				} else {
				    echo "Postingan tidak ditemukan.";
				}

				$koneksi->close();
				?>
			</div>

			<div class="col-md-4">
				<!-- Sidebar -->
			</div>
		</div>
	</div>
	<?php include "footer.php"; ?>