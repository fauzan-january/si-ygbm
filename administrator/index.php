<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
					<div class="jumbotron">
						<h2>SELAMAT DATANG, <?php echo $_SESSION['username'];?> ! </h2>
						<p> Di halaman ini, <?php echo $_SESSION['username'];?> dapat dengan mudah mengelola data atau informasi penting mengenai yayasan.</p>
						<h2> Informasi Terbaru </h2>
						<?php include "informasi-terbaru.php"; ?>
				</div>
      </div>
		</div>
</div><!-- Akhir Jumbotron -->
<?php include "footer.php";?>