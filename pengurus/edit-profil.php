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
                <h2>Edit Profil</h2>
                <form action="proses-edit-profil.php" method="POST">
                <?php
                $id=$_SESSION['user_id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from pengguna where user_id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="username">Nama Pengguna</label>
                        <input type="hidden" name="user_id" value="<?php echo $row['user_id']?>" class="form-control" require>
                        <input type="text" name="username" value="<?php echo $row['username']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">Alamat Email</label>
                        <input type="email" name="email" value="<?php echo $row['email']?>" class="form-control" require>
                    </div>

                    <div class="form-group">
                        <label for="password">Kata Sandi</label>
                        <input type="password" name="password" value="<?php echo $row['password']?>" class="form-control" require>
                    </div>
                    
                    <input type="submit" name="kirim" value="Simpan perubahan" class="btn btn-info">
                    <input type="reset" name="batal" value="Batal" class="btn btn-danger">
                </form>
            </div>
        </div>

            </div>
        </div>
    </div>

<?php include "footer.php";?>