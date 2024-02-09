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
                <form action="proses-edit-data-pengguna.php" method="POST">
                <h2>Edit Data Pengguna</h2>
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from pengguna where user_id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
<div class="form-group">
    <label for="username">NAMA Pengguna</label> <br>
    <input type="hidden" name="user_id" value="<?php echo $row['user_id']?>" class="form-control" required>
    <input type="text"name=" username" value="<?php echo $row['username']?>" class="form-control" required>
</div>

<div class="form-group">
    <label for="email">Alamat Email</label> <br>
    <input type="email" name="email" value="<?php echo $row['email']?>" class="form-control" required>
</div>

                    <div class="form-group">
                        <label for="password">Kata Sandi</label>
                        <input type="password" name="password" value="<?php echo $row['password']; ?>" class="form-control" required>
                    </div>

<div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-control" required>
                            <option value="Administrator" <?php echo ($row['status'] == 'Administrator') ? 'selected' : ''; ?>>Administrator</option>
                            <option value="Pengurus" <?php echo ($row['status'] == 'Pengurus') ? 'selected' : ''; ?>>Pengurus</option>
                        </select>
                    </div>

<div class="form-group">
    <label for="nomor_kepengurusan">Nomor Kepengurusan</label> <br>
    <input type="number" name="nomor_kepengurusan" value="<?php echo $row['nomor_kepengurusan']?>" class="form-control" required>
</div>

                    <input type="submit" name="kirim" value="Simpan Perubahan" class="btn btn-info">
                    <input type="reset" name="batal" value="Batal" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?>