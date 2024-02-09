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
                <form action="proses-edit-data-pengurus.php" method="POST">
                <h2>Edit Data Pengurus</h2>
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from pengurus where pengurus_id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
<div class="form-group">
    <label for="nama">NAMA Lengkap</label> <br>
    <input type="hidden" name="pengurus_id" value="<?php echo $row['pengurus_id']?>" class="form-control" require>
    <input type="text" name="nama" value="<?php echo $row['nama']?>" class="form-control" required>
</div>

<div class="form-group">
    <label for="tempat_lahir">Tempat Lahir</label> <br>
    <input type="text" name="tempat_lahir" value="<?php echo $row['tempat_lahir']?>" class="form-control" required>
</div>

                    <div class="form-group">
                        <label for="tangggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir']; ?>" class="form-control" required>
                    </div>

<div class="form-group">
    <label for="alamat">Alamat/Domisili</label> <br>
    <textarea name="alamat" class="form-control"><?php echo $row['alamat']; ?></textarea>
</div>

<div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" required>
                            <option value="Laki-laki" <?php echo ($row['jenis_kelamin'] == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                            <option value="Perempuan" <?php echo ($row['jenis_kelamin'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                        </select>
                    </div>

<div class="form-group">
    <label for="agama">Agama</label>
    <select name="agama" class="form-control" required>
        <option value="Islam" <?php echo ($row['agama'] == 'Islam') ? 'selected' : ''; ?>>Islam</option>
        <option value="Protestan" <?php echo ($row['agama'] == 'Protestan') ? 'selected' : ''; ?>>Protestan</option>
        <option value="Katolik" <?php echo ($row['agama'] == 'Katolik') ? 'selected' : ''; ?>>Katolik</option>
        <option value="Hindu" <?php echo ($row['agama'] == 'Hindu') ? 'selected' : ''; ?>>Hindu</option>
        <option value="Buddha" <?php echo ($row['agama'] == 'Buddha') ? 'selected' : ''; ?>>Buddha</option>
        <option value="Konghucu" <?php echo ($row['agama'] == 'Konghucu') ? 'selected' : ''; ?>>Konghucu</option>
    </select>
</div>

<div class="form-group">
    <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
    <select name="pendidikan_terakhir" class="form-control" required>
        <option value="SD Sederajat" <?php echo ($row['pendidikan_terakhir'] == 'SD Sederajat') ? 'selected' : ''; ?>>SD Sederajat</option>
        <option value="SMP Sederajat" <?php echo ($row['pendidikan_terakhir'] == 'SMP Sederajat') ? 'selected' : ''; ?>>SMP Sederajat</option>
        <option value="SMA Sederajat" <?php echo ($row['pendidikan_terakhir'] == 'SMA Sederajat') ? 'selected' : ''; ?>>SMA Sederajat</option>
        <option value="Diploma" <?php echo ($row['pendidikan_terakhir'] == 'Diploma') ? 'selected' : ''; ?>>Diploma</option>
        <option value="Strata1" <?php echo ($row['pendidikan_terakhir'] == 'Strata1') ? 'selected' : ''; ?>>Strata1</option>
        <option value="Strata2" <?php echo ($row['pendidikan_terakhir'] == 'Strata2') ? 'selected' : ''; ?>>Strata2</option>
        <option value="Strata3" <?php echo ($row['pendidikan_terakhir'] == 'Strata3') ? 'selected' : ''; ?>>Strata3</option>
    </select>
</div>

<div class="form-group">
    <label for="kegiatan_sekarang">Kegiatan Sekarang</label>
    <select name="kegiatan_sekarang" class="form-control" required>
        <option value="Pelajar" <?php echo ($row['kegiatan_sekarang'] == 'Pelajar') ? 'selected' : ''; ?>>Pelajar</option>
        <option value="Mahasiswa" <?php echo ($row['kegiatan_sekarang'] == 'Mahasiswa') ? 'selected' : ''; ?>>Mahasiswa</option>
        <option value="Bekerja" <?php echo ($row['kegiatan_sekarang'] == 'Bekerja') ? 'selected' : ''; ?>>Bekerja</option>
        <option value="Pengangguran" <?php echo ($row['kegiatan_sekarang'] == 'Pengangguran') ? 'selected' : ''; ?>>Pengangguran</option>
    </select>
</div>

<div class="form-group">
    <label for="nomor_telepon">Nomor Telepon</label> <br>
    <input type="number" name="nomor_telepon" value="<?php echo $row['nomor_telepon']?>" class="form-control" required>
</div>

<div class="form-group">
    <label for="email">Email</label> <br>
    <input type="email" name="email" value="<?php echo $row['email']?>" class="form-control" required>
</div>

<div class="form-group">
    <label for="nomor_kepengurusan">Nomor Kepengurusan</label> <br>
    <input type="number" name="nomor_kepengurusan" value="<?php echo $row['nomor_kepengurusan']?>" class="form-control" required>
</div>

<div class="form-group">
    <label for="status_jabatan">Status Jabatan</label> <br>
    <input type="text" name="status_jabatan" value="<?php echo $row['status_jabatan']?>" class="form-control" required>
</div>

                    <input type="submit" name="kirim" value="Simpan Perubahan" class="btn btn-info">
                    <input type="reset" name="batal" value="Batal" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?>