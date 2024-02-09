<?php
  //session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Informasi Yayasan Gelegar Bangsa Mandiri (SIYGBM)</title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../bootstrap/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="../bootstrap/css/styles.css" rel="stylesheet">
        <style>
      body {
        padding-top: 60px;
      }
        </style>
  </head>
  <body>
    
    <!-- Awal script Navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" id="scrollspy">
      <div class="container">
        <header role="banner">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle Nav</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <h1 class="navbar-brand">
              <a href="index.php">Sistem Informasi Yayasan Gelegar Bangsa Mandiri (SIYGBM)</a>
            </h1>
         <img src="../images/logo-YGBM.jpg" alt="Logo" width="200" height="100">
          </div>
        </header>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
                            <a href="index.php"><span class="glyphicon glyphicon-home"></span> Dashboard, <span class="sr-only">halaman utama</span></a>
                        </li>
            
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-tasks"></span> Pengurus yang sedang masuk sekarang (<?php echo $_SESSION['username'];?>) <span class="caret"></span>
                        </a>
                            <ul class="dropdown-menu">
                                <li><a href="profil.php">Profil</a></li>
                                <li><a href="data-pribadi.php">Data Pribadi</a></li>
                                <li><a href="../logout.php">Keluar</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-tasks"></span> Lihat Data Yayasan <span class="caret"></span>
                        </a>
                            <ul class="dropdown-menu">
                                <li> <button> <a href="data-pengurus.php">Data Pengurus</a> </button> </li>
                                <li> <button> <a href="kumpulan-informasi-terbaru.php">Informasi Terbaru</a> </button> </li>
                            </ul>
                        </li>
          </ul>
      </div>
      </div>
        </div>
      </div>
    </nav><!-- Akhir script Navbar -->