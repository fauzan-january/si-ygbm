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
        <h2>Informasi Terbaru</h2>
            <?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Informasi berhasil diterbitkan!
                    </div>
            <?php

            }

            ?>


            <?php 

            if(@$_GET['pesan']=="hapusBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Informasi Berhasil Dihapus!
                    </div>
            <?php

            }

            ?>

            <?php 

            if(@$_GET['pesan']=="editBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Informasi Berhasil diubah!
                    </div>
            <?php

            }

            ?>


        <table id="dataTables" class="table table-bordered">
        <thead>
            <tr>
                <th>Judul Informasi</th><th>Diposting Oleh</th><th>Waktu Posting</th>
                <th>
                    <a href="tambah-informasi.php">
                        <button class="btn btn-info glyphicon glyphicon-plus">Tambah Informasi</button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../koneksi.php";
        $sql=$koneksi->query("select * from informasi order by id ASC");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td> <a href="detail-informasi.php?id=<?php echo $row['id']?>"> <?php echo $row['judul'] ?> </a> </td>
                <td><?php echo $row['oleh']?></td>
                <td><?php echo $row['tanggal']?></td>
                <td>

                <a href="edit-informasi.php?id=<?php echo $row['id']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit">Edit Informasi</button>
                </a>

                <a href="hapus-informasi.php?id=<?php echo $row['id']?>" onclick=" return confirm('Anda yakin menghapus informasi ini?')">
                    <button class="btn btn-xs btn-warning glyphicon glyphicon-remove">Hapus Informasi</button>
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