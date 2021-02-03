<?php 
session_start();
// cek session
if($_SESSION['role']==""){
    header("location: login.php?pesan=gagal");
   }

require 'assets/function/function.php';
$jurusan = query("SELECT * FROM jurusan");
$dosen = query("SELECT * FROM dosen");
// cek apakah tombol pada tambah sudah di gunakan atau blm
if (isset($_POST["input"])) {
    
    // debug program
      // var_dump($_POST);
      // var_dump($_FILES);
      // die;
     // cek data berhasil ditambahkan atau gagal
       if ( tambah_dosen ($_POST) > 0) {
        echo "
          <script>
            alert('data berhasil ditambahkan');
            document.location.href = 'daftar_dosen.php';
          </script>
          ";
       } else{
       echo "<script>
          alert('data gagal ditambahkan');
          document.location.href = 'tambah_dosen.php';
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
    <link rel="stylesheet" href="assets/datepicker/dist/css/bootstrap-datepicker.css">
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
                    <h1>Tambah Data Dosen</h1>
             </div>
            <div class="card-body">    
                <div class="container">
                        <div class="row">
                           <div class="col-sm-8">
                        
                                <div class="panel panel-default">
                                <!-- Default panel contents -->
                                    <h4 class="card-tittle">Isi dengan lengkap</h4>
                                    <br>
                                    <div class="form-group" id="form_tambah">
                                    <form action="" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                
                                    <div class="col-lg-8">
                                        <h3 class="page-header" style="margin-top:-5px;">
                                            Input Data Dosen
                                        </h3>
                                    </div>
                                </div>

                                <div class="row">    
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>NRD</label>
                                            <input class="form-control" id="send" name="nrd" placeholder="NRD" oninput="result.value = send.value" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Kode Dosen</label>
                                            <input class="form-control" name="kode_dosen" placeholder="Kode Dosen" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" placeholder="Nama dosen" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select name="jenis_kelamin" class="form-control" required>
                                                <option value="">Jenis Kelamin</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="email" placeholder="email" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input type="text" class="form-control" name="tanggal_lahir" id="datepicker" value="yyyy/mm/dd">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" name="alamat" placeholder="Alamat" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Agama</label>
                                            <select name="agama" class="form-control"  required>
                                                <option value="">Pilih Agama Anda</option>
                                                <option value="islam">Islam</option>
                                                <option value="kristen">Kristen</option>
                                                <option value="katolik">Katolik</option>
                                                <option value="budha">Budha</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h3 class="page-header" style="margin-top:-5px;">
                                            Uploud Gambar Formal Anda
                                        </h3>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Username (*masukkan NRD)</label>
                                            <input class="form-control" id="result" name="username" readonly="readonly" placeholder="Username" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password"  placeholder="Password" required>
                                        </div>
                                        <input type="file" accept="image/*" onchange="loadFile(event)" name="gambar" class="btn btn-primary btn-md"  >
                                        <img id="output"/ name="gambar" placeholder=" masukan gambar " >
                                    </div>
                                </div>
                           
                            <script>
                                var loadFile = function(event) {
                                var output = document.getElementById('output');
                                output.src = URL.createObjectURL(event.target.files[0]);
                                };
                            </script>
                            <br>
                                <button class="btn btn-primary" name="input" value="submit" type="submit">Submit</button>
                            </div>
                            </form>
                        </div>
                    </div>
                         <div class="col-lg-4">
                            <h3 class="page-header">
                                NRD & Kode Dosen
                            </h3>
                            <div class="table-responsive">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NRD</th>
                                            <th>Kode Dosen</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($dosen as $row) : ?>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?php echo $row['nrd']; ?></td>
                                            <td><?php echo $row['kode_dosen']; ?></td>
                                        </tr>
                                        <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
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
    <script src="assets/datepicker/js/bootstrap-datepicker.js"></script>
    <script>
       // datepicker
       $(function(){
          $("#datepicker").datepicker({
            format: 'yyyy/mm/dd',
            autoclose: true,
            todayHighlight: true,
            });
         });
         </script>

</body>
</html>

