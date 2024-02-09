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
        <h1>Data Pribadi</h1>
            <?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Penyimpanan Berhasil!
                    </div>
            <?php

            }

            ?>


            <?php 

            if(@$_GET['pesan']=="hapusBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Data Berhasil Dihapus!
                    </div>
            <?php

            }

            ?>

            <?php 

            if(@$_GET['pesan']=="editBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Perubahan Berhasil!
                    </div>
            <?php

            }

            ?>


        <table id="dataTables" class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Lengkap</th><th>Tempat Lahir</th><th>Tanggal Lahir</th><th>Alamat</th><th>Jenis Kelamin</th><th>Agama</th><th>Pendidikan Terakhir</th><th>Kegiatan Sekarang</th><th>Nomor Telepon</th><th>Email</th><th>Nomor Kepengurusan</th><th>Status Jabatan</th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../koneksi.php";
        $user= $_SESSION['user_id'];
        $sql=$koneksi->query("SELECT * FROM pengurus JOIN pengguna ON pengurus.nomor_kepengurusan = pengguna.nomor_kepengurusan WHERE user_id = '$user'");
        //$sql=$koneksi->query("select * from pengurus order by nomor_kepengurusan ASC");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['nama']?></td>
                <td><?php echo $row['tempat_lahir']?></td>
                <td><?php echo $row['tanggal_lahir']?></td>
                <td><?php echo $row['alamat']?></td>
                <td><?php echo $row['jenis_kelamin']?></td>
                <td><?php echo $row['agama']?></td>
                <td><?php echo $row['pendidikan_terakhir']?></td>
                <td><?php echo $row['kegiatan_sekarang']?></td>
                <td><?php echo $row['nomor_telepon']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['nomor_kepengurusan']?></td>
                <td><?php echo $row['status_jabatan']?></td>
            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
        </div>
    </div>
</div>


<?php include "footer.php";?>