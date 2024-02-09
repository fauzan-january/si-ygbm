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
                <form action="proses-tambah-data-pengguna.php" method="POST">
                <h2>Form Tambah Data Pengguna</h2>
                    <div class="form-group">
                        <label for="username">Nama Pengguna</label>
                        <input type="text" name="username" title="nama pengguna" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">Alamat Email</label>
                        <input type="email" name="email" title="alamat email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="password">Kata Sandi</label>
                        <input type="password" name="password" title="kata sandi" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" title="pilih status" class="form-control" require>
                            <option value="Administrator" title="administrator">Administrator</option>
                            <option value="Pengurus" title="pengurus">Pengurus</option>
                        </select>
                        </div>

                    <div class="form-group">
                        <label for="nomor_kepengurusan">Nomor Kepengurusan</label>
                        <input type="number" name="nomor_kepengurusan" title="nomor kepengurusan" class="form-control">
                    </div>

                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?>