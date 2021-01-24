<?php 
session_start();
// cek session
if($_SESSION['role']==""){
    header("location: login.php?pesan=gagal");
   }
require 'assets/function/function.php';

// cek apakah tombol pada tambah sudah di gunakan atau blm
if (isset($_POST["submit"])) {
    
    // debug program
      // var_dump($_POST);
      // var_dump($_FILES);
      // die;
     // cek data berhasil ditambahkan atau gagal
       if ( tambah ($_POST) > 0) {
        echo "
          <script>
            alert('data berhasil ditambahkan');
            document.location.href = 'index.php';
          </script>
          ";
       } else{
       echo "<script>
          alert('data gagal ditambahkan');
          document.location.href = 'tambah_mahasiswa.php';
        </script>
        ";
        }
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
        <div class="card">
            <div class="card-header text-center">
                    <h1>Tambah Data Mahasiswa</h1>
             </div>
            <div class="card-body">    
                <div class="container">
                        <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-default">
                            <!-- Default panel contents -->
                            <h4 class="card-tittle">Isi dengan lengkap</h4>
                            <br>
                            <div class="form-group" id="form_tambah">
                            <form action="" method="post" enctype="multipart/form-data">
                            <ul>
                            <br>
                            <div class="input-group ">
                            <span class="input-group-addon nama" id="sizing-addon2">Nama: </span>
                            <input type="text" class="form-control nama" id="nama" name="nama" placeholder="Nama Lengkap" aria-describedby="sizing-addon2" required>
                            </div>
                            <br>
                            <div class="input-group ">
                            <span class="input-group-addon nrp" id="sizing-addon2">NRP: </span>
                            <input type="text" class="form-control nrp" id="nrp" name="nrp" placeholder="Nomor Induk" aria-describedby="sizing-addon2" requierd>
                            </div>
                            <br>
                            <div class="input-group">
                            <span class="input-group-addon email" id="sizing-addon2">Email: </span>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email Aktif" aria-describedby="sizing-addon2" required>
                            </div>
                            <br>
                            <div class="input-group ">
                            <span class="input-group-addon jurusan" id="sizing-addon2">Jurusan: </span>
                            <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Jurusan Kuliah" aria-describedby="sizing-addon2" required>
                            </div>
                            <br>
                        <div class="input-group ">
                            <span class="input-group-addon gambar" id="sizing-addon2">Gambar: </span>
                            </div>
                            <input type="file" accept="image/*" onchange="loadFile(event)" name="gambar" class="btn btn-primary btn-md"  >
                            <img id="output"/ name="gambar" placeholder=" masukan gambar " >
                            <br>
                            <script>
                                var loadFile = function(event) {
                                var output = document.getElementById('output');
                                output.src = URL.createObjectURL(event.target.files[0]);
                                };
                            </script>
                            <br>
                        <button class="btn btn-primary" name="submit" value="submit" type="submit">Submit</button>
                            </ul>          
                            </div>
                            </form>
                        </div>
                    </div>
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