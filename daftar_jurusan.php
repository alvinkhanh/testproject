<?php 
session_start();
// cek session
if($_SESSION['role']==""){
    header("location: login.php?pesan=gagal");
   }

require 'assets/function/function.php';
$jurusan = query("SELECT * FROM jurusan");
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
    <div class="card" id="atur_matkul">
    <div class="row" >
    <div class="col-lg-12" style="margin-top:-10px;">
        <h1 class="page-header">
            Halaman
            <small>Jurusan</small>
        </h1>
    </div>
</div>

<!-- Isi -->
<div class="row" style=" border:1px solid;">
    <div class="col-lg-5">
        <h3 class="page-header">
            Tambah Jurusan
        </h3>
        <form method="post">
                <div class="form-group">
                    <label>Kode Jurusan</label>
                    <input class="form-control" id="field1" name="kode_jurusan" placeholder="Masukan Kode jurusan" required>
                </div>
                <div class="form-group">
                    <label>Nama Jurusan</label> 
                        <input class="form-control" name="nama_jurusan" placeholder="Masukan Nama jurusan" required>
                </div>
            <button type="submit" name="input" class="btn btn-primary" value="Input"/>Tambah</button>
        </form>

        <!-- Script Input -->
        <?php 
        if(@$_POST['input']){
            $kode_jurusan=htmlspecialchars($_POST['kode_jurusan']);
            $nama_jurusan=htmlspecialchars($_POST['nama_jurusan']);
            
            $query=mysqli_query($conn, "INSERT INTO jurusan(kode_jurusan, nama_jurusan) values('$kode_jurusan','$nama_jurusan')") or die (mysqli_error());
            
            if($query){
            ?>
                <script type="text/javascript">
                alert("Input Data Sukses !")
                window.location="daftar_jurusan.php";
                </script>
            <?php
            }else{
            ?>
                <script type="text/javascript">
                alert("Input Data Gagal !")
                window.location="daftar_jurusan.php";
                </script>
            <?php
            } 
        }
        ?>
    </div>


    <div class="col-lg-7">
        <h3 class="page-header">
            Daftar Jurusan
        </h3>
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Jurusan</th>
                        <th>Nama Jurusan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                <?php foreach ($jurusan as $row) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?php echo $row['kode_jurusan']; ?></td>
                        <td><?php echo $row['nama_jurusan']; ?></td>
                        <td><i><a onclick="return confirm('Yakin akan hapus data ini ?')" href="setmapel_hapus.php?id=<?php echo $row['id_jurusan'];?>">Hapus</a></i></td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<!-- isi close -->

      <!-- footer -->
    <footer class ="footer" >
        <div class="card-footer text-muted">
            2 days ago
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