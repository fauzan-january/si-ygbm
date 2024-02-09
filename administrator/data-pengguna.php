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
        <h2>Data Pengguna</h2>
            <?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Data pengguna berhasil ditambahkan!
                    </div>
            <?php

            }

            ?>


            <?php 

            if(@$_GET['pesan']=="hapusBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Data pengguna Berhasil Dihapus!
                    </div>
            <?php

            }

            ?>

            <?php 

            if(@$_GET['pesan']=="editBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Data pengguna Berhasil diubah!
                    </div>
            <?php

            }

            ?>


        <table id="dataTables" class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Pengguna</th><th>Alamat Email</th><th>Status</th><th>Nomor Kepengurusan</th><th>Waktu Terakhir Masuk</th>
                <th>
                    <a href="tambah-data-pengguna.php">
                        <button class="btn btn-info glyphicon glyphicon-plus">Tambah Pengguna</button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../koneksi.php";
        $sql=$koneksi->query("select * from pengguna order by user_id ASC");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['username']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['status']?></td>
                <td><?php echo $row['nomor_kepengurusan']?></td>
                <td><?php echo $row['last_login']?></td>
                <td>

                <a href="edit-data-pengguna.php?id=<?php echo $row['user_id']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit">Edit Pengguna</button>
                </a>

                <a href="hapus-data-pengguna.php?id=<?php echo $row['user_id']?>" onclick=" return confirm('Anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-warning glyphicon glyphicon-remove">Hapus Pengguna</button>
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