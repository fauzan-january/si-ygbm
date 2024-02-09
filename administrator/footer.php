<?php
  //session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>

<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="text-center my-auto">
      <label class="label label-danger">PERHATIAN!</label>
      <span>Semua data dan informasi di sistem ini harus dijaga kerahasiaannya. Jangan sampai ada kebocoran data atau informasi ke pihak luar yang bukan pengurus yayasan.</span> <br>
      <span><p class="mb-1">&copy; <?php echo date('Y'); ?> Yayasan Gelegar Bangsa Mandiri</p></span>
      <span>Dibangun Oleh <a href="https://january.my.id/">Fauzan</a></span>
    </div>
  </div>
</footer>
<script src="../bootstrap/js/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../bootstrap/js/dataTables.bootstrap.min.js"></script>
<script src="../bootstrap/js/jquery.dataTables.js"></script>
<script src="../bootstrap/js/scripts.js"></script>
<script src="../DataTables/datatables.min.js"></script>
<script type="text/javascript">
 $(document).ready(function(){
     $('#dataTables').DataTable();
 });

</script>

</body>
</html>