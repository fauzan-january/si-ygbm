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
        <h2>Profil</h2>
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
                    Profil berhasil diubah!
                    </div>
            <?php

            }

            ?>


        <table id="dataTables" class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Pengguna</th><th>Alamat Email</th><th>Status</th><th>Nomor Kepengurusan</th><th>Waktu Terakhir Masuk</th><th>Aksi</th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../koneksi.php";
        $id=$_SESSION['user_id'];
        $sql=$koneksi->query("select * from pengguna where user_id='$id'");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['username']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['status']?></td>
                <td><?php echo $row['nomor_kepengurusan']?></td>
                <td><?php echo $row['last_login']?></td>
                <td>
                <a href="edit-profil.php?id=<?php echo $row['user_id']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit">Edit Profil</button>
                </a>
                </td>
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