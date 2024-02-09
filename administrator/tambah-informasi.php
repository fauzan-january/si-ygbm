<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>

<?php include "header.php"; ?>

<div class="container">
        <h2>Terbitkan Informasi Terbaru!</h2>
        <form action="proses-tambah-informasi.php" method="POST">
            <div class="form-group">
                <label for="judul">Judul:</label>
                <input type="text" class="form-control" id="judul" name="judul" required>
            </div>
            <div class="form-group">
                <label for="isi">Isi:</label>
                <textarea class="form-control" id="isi" name="isi" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Terbitkan</button>
            <input type="reset" name="batal" value="Batal" class="btn btn-danger">
        </form>
    </div>
    
    <?php include "footer.php"; ?>