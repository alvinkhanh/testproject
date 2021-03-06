<?php 
session_start();
// cek session
if($_SESSION['role']==""){
    header("location: login.php?pesan=gagal");
   }
require 'assets/function/function.php';
  
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
    <div class="row">
    <div class="col-lg-12" style="margin-top:-10px;">
        <h1 class="page-header">
            Halaman
            <small>Mata Kuliah</small>
        </h1>
    </div>
</div>

<!-- Isi -->
<div class="row">
    <div class="col-lg-5">
        <h3 class="page-header">
            Atur Mata Kuliah
        </h3>
        <form method="post">
        <div class="form-group">
                <label>Nama Jurusan</label>
                <select name="kode_jurusan" class="form-control" required>
                    <option value="">Pilih jurusan</option>
                    <?php 
                        $query=mysqli_query($conn, "SELECT * FROM jurusan order by id asc");
                        while ($row=mysqli_fetch_array($query)) {
                            ?>
                        <option value="<?php  echo $row['kode_jurusan']; ?>"><?php  echo $row['nama_jurusan']; ?></option>
                    <?php
                        }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label>Nama Dosen</label>
                <select name="kode_dosen" class="form-control" required>
                    <option value="">Pilih Dosen</option>
                    <?php 
                        $query=mysqli_query($conn, "SELECT * FROM dosen order by nrd asc");
                        while ($row=mysqli_fetch_array($query)) {
                            ?>
                        <option value="<?php  echo $row['kode_dosen']; ?>"><?php  echo $row['nama']; ?></option>
                    <?php
                        }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label>Mata Kuliah</label>
                <select name="kode_matkul" class="form-control" required>
                    <option value="">Pilih Matkul</option>
                    <?php 
                        $query=mysqli_query($conn, "SELECT * FROM matkul order by kode_matkul asc");
                        while($row=mysqli_fetch_array($query))
                        {
                    ?>
                        <option value="<?php  echo $row['kode_matkul']; ?>"><?php  echo $row['nama_matkul']; ?></option>
                    <?php 
                        }
                ?>
                </select>
            </div>
            <button type="submit" name="input" class="btn btn-primary" value="Input"/>Tambah</button>
        </form>

        <!-- Script Input -->
        <?php 
        if(@$_POST['input']){
            $kode_jurusan=strtoupper($_POST['kode_jurusan']);
            $kode_dosen=strtoupper($_POST['kode_dosen']);
            $kode_matkul=strtoupper($_POST['kode_matkul']);
            
            
            $query=mysqli_query($conn, "INSERT INTO mengajar(kode_jurusan, kode_dosen, kode_matkul) values('$kode_jurusan','$kode_dosen','$kode_matkul')") or die (mysqli_error());
            
            if($query){
            ?>
                <script type="text/javascript">
                alert("Input Data Sukses !")
                window.location="atur_matkul.php";
                </script>
            <?php
            }else{
            ?>
                <script type="text/javascript">
                alert("Input Data Gagal !")
                window.location="atur_matkul.php";
                </script>
            <?php
            } 
        }
        ?>
    </div>


    <div class="col-lg-7">
        <h3 class="page-header">
            Tampil Data
        </h3>
        <div class="table-responsive">
            <?php
                $view=mysqli_query($conn, "SELECT jurusan.nama_jurusan, dosen.nama, mengajar.id_mengajar, matkul.nama_matkul from jurusan, dosen, mengajar, matkul 
                            where mengajar.kode_jurusan=jurusan.kode_jurusan AND mengajar.kode_dosen=dosen.kode_dosen AND mengajar.kode_matkul=matkul.kode_matkul
                            order by mengajar.kode_dosen asc");
                $no=0;
            ?>
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jurusan</th>
                        <th>Nama Dosen</th>
                        <th>Mata Kuliah</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row=mysqli_fetch_array($view)){
                    ?>
                    <tr>
                        <td><?php echo $no=$no+1; ?></td>
                        <td><?php echo $row['nama_jurusan']; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['nama_matkul']; ?></td>
                        <td><i><a onclick="return confirm('Yakin akan hapus data ini ?')" href="setmapel_hapus.php?id=<?php echo $row['id_mengajar'];?>">Hapus</a></i></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
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