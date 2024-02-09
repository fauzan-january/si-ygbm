<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-edit-informasi.php" method="POST">
                <h2>Edit Informasi Terbaru</h2>
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from informasi where id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
<div class="form-group">
    <label for="judul">Judul Informasi</label> <br>
    <input type="hidden" name="id" value="<?php echo $row['id']?>" class="form-control" required>
    <input type="text"name="judul" value="<?php echo $row['judul']?>" class="form-control" required>
</div>

<div class="form-group">
    <label for="isi">Isi Informasi</label> <br>
    <input type="textarea" name="isi" value="<?php echo $row['isi']?>" class="form-control" required>
</div>

                    <input type="submit" name="kirim" value="Simpan Perubahan" class="btn btn-info">
                    <input type="reset" name="batal" value="Batal" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?>