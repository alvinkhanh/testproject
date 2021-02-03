<?php 
session_start();
// cek session
if($_SESSION['role']==""){
    header("location: login.php?pesan=gagal");
   }
   
require 'assets/function/function.php';
$dosen = query("SELECT * FROM dosen");

// saat tombol cari di klik
if (isset ($_POST["cari"])) {
  # code...
  $dosen = cari($_POST["keyword"]); 
}
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/6080ba356b.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- my css -->
    <link rel="stylesheet" href="assets/css/content.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <!-- <link rel="stylesheet" href="assets/css/card.css"> -->
    <title>Project 1</title>
</head>
<body>
   
    <!-- pembungkus -->
<div class="wrapper">
        <!-- sidebar -->
        <div class="sidebar1">
            <nav class="sidebar">
                <div class="text">Side Menu</div>
                    <ul>
                        <li class="active"><a href="index.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a></li>
                        <li>
                            <a href="#" class="feat-btn"><i class="fas fa-user-circle"></i><span>Mahasiswa</span>
                                <i class="fas fa-caret-down first"></i>
                            </a>
                            <ul class="feat-show">
                                <li><a href="daftar_mahasiswa.php"><i class="fas fa-user-circle"></i><span>Daftar Mahasiswa</span></a></li>
                                <li><a href="tambah_mahasiswa.php"><i class="fas fa-user-circle"></i><span>Tambah Mahasiswa</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="serv-btn"><i class="fas fa-user-circle"></i><span>Dosen</span>
                                <i class="fas fa-caret-down second"></i>
                            </a>
                            <ul class="serv-show">
                                <li><a href="daftar_dosen.php"><i class="fas fa-search"></i><span>Daftar Dosen</span></a></li>
                                <li><a href="tambah_dosen.php"><i class="fas fa-search"></i><span>Tambah Dosen</span></a></li>
                                <li><a href="Atur_matkul.php"><i class="fas fa-search"></i><span>Atur MatKul</span></a></li>
                            </ul>
                        </li>
                            <li><a href="absen.php"><i class="fas fa-search"></i><span>Absen</span></a></li>
                            <li>
                            <a href="#" class="three-btn"><i class="fas fa-user-circle"></i><span>Mata Kuliah</span>
                                <i class="fas fa-caret-down three"></i>
                            </a>
                            <ul class="three-show">
                                <li><a href="daftar_matakul.php"><i class="fas fa-search"></i><span>Daftar MatKul</span></a></li>
                                <li><a href="jadwal_kuliah.php"><i class="fas fa-search"></i><span>Jadwal Kuliah</span></a></li>
                            </ul>
                        </li>
                            <li><a href="recent_activity.php"><i class="fas fa-info-circle"></i><span>Recent Activity</span></a></li>
                            <li><a href="kelola_user.php"><i class="fas fa-sliders-h"></i><span>Kelola User</span></a></li>
                    </ul>
                </nav>
            </div>
        <!-- sidebar close -->

        <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
   
        <!--top bar -->     
                <div class="topbar">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="sidebar-wrapper" role="navigation">
                            <label for="navbar-brand" class="logo"><span class="active navbar-brand" href="#">AKHR</span></label>
                            <div type="button" id="sidebarBar" class="nav-icon1 hamburger animated fadeInLeft is-closed"
                                data-toggle="offcanvas"><i class="fas fa-bars"></i></div>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            </div>
                            <div class="menu-icon">
                            <div class="search-icon"><span class="fas fa-search"></span></div>
                            </div>
                            <form action="#">
                                <input type="search" class="data-search" placeholder="search" required>
                                <button type="submit" class="fas fa-search"></button>
                            </form>
                            <div class="components">
                                <ul class="list-unstyled topnav">
                                    <li><a class="active" href="#"><i class="fas fa-bell"></i></a></li>
                                    <li>
                                    <div class="action">
                                            <div class="profile">
                                                <img class="profile-toggle" src="assets/image/gambar.jpg" alt="">
                                            </div>
                                            <div class="menu-profile">
                                                <h3>Alvin khanh rishad<br>
                                                <span class="subspan">Website designer</span></h3>
                                                <ul>
                                                <li><a href=""><i class="fas fa-bars"></i> <span>My profile</span></a></li>
                                                <li><a href=""><i class="fas fa-bars"></i> <span>Logout</span></a></li>
                                                <li><a href=""><i class="fas fa-bars"></i> <span>Setting</span></a></li>
                                                <li><a href=""><i class="fas fa-bars"></i> <span>Help</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                    
                        </nav>
                        </div>
        <!-- navbar top close-->
        
    <!-- untuk isi -->

    <div class="container-fluid" id="page-content" >
        <div class="card " id="daftar_dosen">
            <!-- header -->
            <div class="section header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12" >
                            <div class="card-body" id="table_dosen">
                            <h1 class="text-center">Daftar Dosen</h1>
                                <!-- tambah -->
                                <br><br>
                                <form action="" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                        <a href="tambah_dosen.php" type="button" class="btn btn-primary">Tambah Dosen</a>
                                    </div><!-- /input-group -->
                                </div><!-- /.col-lg-6 -->
                                        <!-- search -->
                                    <div class="col-md-6">
                                    <div class="input-group">
                                    <input type="text" name="keyword" class="form-control" placeholder="Username" autofocus autocomplete="off">
                                        <span class="input-group-btn" id="sizing-addon2">
                                        <button class="btn btn-primary" name="cari" type="submit">Cari</button>
                                        </span>
                                    </div><!-- /input-group -->
                                    </div><!-- /.col-lg-6 -->
                                </div>
                                </form>
                                <br>

          <!-- close search -->
          <!-- table -->
                        <div class="table-responsive" >
                                <table class="table" cellpadding="10" border="1" cellspacing="0">
                                        <tr class="active">
                                        <th>No.</th>
                                        <th>Aksi</th>
                                        <th>Gambar</th>
                                        <th>NRP</th>
                                        <th>Kode Dosen</th>
                                        <th>Nama</th>
                                        <th>Tanggal lahir</th>
                                        <th>Email</th>
                                        <th>Agama</th>
                                        <th>Jenis - Kelamin</th>
                                        <th>Alamat</th>
                                    </tr>
                                    <?php $i = 1; ?>
                                    <?php foreach ($dosen as $row) : ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td>
                                <a href="ubah_dosen.php?id=<?=$row["id"]; ?>"><button class="btn btn-primary" value="submit">Ubah</button></a> | 
                                <a href="hapus_dosen.php?id=<?=$row["id"]; ?>" onclick="return confirm('yakin?');"><button class="btn btn-primary" value="submit">Hapus</button></a>
                                        <td><img src="assets/image/<?=$row["gambar"];?>" width="80"></td>
                                        <td><?=$row["nrd"];?></td>
                                        <td><?=$row["kode_dosen"];?></td>
                                        <td><?=$row["nama"];?></td>
                                        <td><?=$row["tanggal_lahir"];?></td>
                                        <td><?=$row["email"];?></td>
                                        <td><?=$row["agama"];?></td>
                                        <td><?=$row["jenis_kelamin"];?></td>
                                        <td><?=$row["alamat"];?></td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                             </table>
                         </div>
                         </div>
                     </div>
                 </div>
            </div>
      </div>
<!-- isi close -->

      <!-- footer -->
    <footer class ="footer" >
    <div class="container text-center">
          <div class="row">
            <div class="col-sm-12">
              <p><i class="glyphicon glyphicon-copyright-mark"></i> Copyright 2020 | built with <i class="glyphicon glyphicon-music"></i> | built by. <a href=""></a>Alvin Khanh Rishad </p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12"><a href="https://www.youtube.com/watch?v=btYCEsKJ5k4&list=PLFIM0718LjIVWpIhlNA_sU-4ZWvN4uSmb&index=2" class="btn btn-danger"><i class="glyphicon glyphicon-thumbs-up"></i> Like My IG</a></div>
          </div>
        </div>
    </footer>
       
        </div>
    </div>
</div>

<!-- wrapper close -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <script src="assets/js/main.js"></script>
</body>
</html>