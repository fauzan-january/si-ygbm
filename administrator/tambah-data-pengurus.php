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
                <form action="proses-tambah-data-pengurus.php" method="POST">
<h2> Form Tambah Data Pengurus </h2>

                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" name="nama" title="nama lengkap" class="form-control" require>
                    </div>

                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" title="tempat lahir" class="form-control" require>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" title=" " class="form-control" require>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat/Domisili</label>
                        <textarea name="alamat" title="alamat/domisili" class="form-control" require></textarea>
                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" title="pilih jenis kelamin" class="form-control" require>
                            <option value="Laki-laki" title="laki-laki">Laki-Laki</option>
                            <option value="Perempuan" title="perempuan">Perempuan</option>
                        </select>
                        </div>

                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <select name="agama" title="pilih agama" class="form-control" require>
                            <option value="Islam" title="islam">Islam</option>
                            <option value="Protestan" title="protestan">Protestan</option>
                            <option value="Katolik" title="katolik">Katolik</option>
                            <option value="Hindu" title="hindu">Hindu</option>
                            <option value="Buddha" title="buddha">Buddha</option>
                            <option value="Konghucu" title="konghucu">Konghucu</option>
                        </select>
                        </div>

                    <div class="form-group">
                        <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                        <select name="pendidikan_terakhir" title="pilih pendidikan terakhir" class="form-control" require>
                            <option value="SD Sederajat" title="sd sederajat">SD Sederajat</option>
                            <option value="SMP Sederajat" title="smp sederajat">SMP Sederajat</option>
                            <option value="SMA Sederajat" title="sma sederajat">SMA Sederajat</option>
                            <option value="Diploma" title="diploma">Diploma</option>
                            <option value="Strata1" title="strata1">Strata1</option>
                            <option value="Strata2" title="strata2">Strata2</option>
                            <option value="Strata3" title="strata3">Strata3</option>
                        </select>
                        </div>

                    <div class="form-group">
                        <label for="kegiatan_sekarang">Kegiatan Sekarang</label>
                        <select name="kegiatan_sekarang" title="pilih kegiatan sekarang" class="form-control" require>
                            <option value="Pelajar" title="pelajar">Pelajar</option>
                            <option value="Mahasiswa" title="mahasiswa">Mahasiswa</option>
                            <option value="Bekerja" title="Bekerja">Bekerja</option>
                            <option value="Pengangguran" title="pengangguran">Pengangguran</option>
                        </select>
                        </div>

                    <div class="form-group">
                        <label for="nomor_telepon">Nomor Telepon</label>
                        <input type="number" name="nomor_telepon" title="nomor telepon" class="form-control" require>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" title="email" class="form-control" require>
                    </div>

                    <div class="form-group">
                        <label for="nomor_kepengurusan">Nomor Kepengurusan</label>
                        <input type="number" name="nomor_kepengurusan" title="nomor kepengurusan" class="form-control" require>
                    </div>

                    <div class="form-group">
                        <label for="status_jabatan">Status Jabatan</label>
                        <input type="text" name="status_jabatan" title="status jabatan" class="form-control" require>
                    </div>

                    <input type="submit" name="kirim" value="Simpan" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
<?php include "footer.php";?>