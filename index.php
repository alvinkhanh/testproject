<?php 
session_start();
 // cek apakah yang mengakses halaman ini sudah login
 if($_SESSION['role']==""){
    header("location: login.php?pesan=gagal");
   }

require 'assets/function/function.php';
$mahasiswa = query("SELECT * FROM Mahasiswa");

// saat tombol cari di klik
if (isset ($_POST["cari"])) {
  # code...
  $mahasiswa = cari($_POST["keyword"]); 
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
<body onload="initClock()">
   
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
                        <li>
                            <a href="#" class="three-btn"><i class="fas fa-user-circle"></i><span>Jurusan</span>
                                <i class="fas fa-caret-down three"></i>
                            </a>
                            <ul class="three-show">
                                <li><a href="daftar_jurusan.php"><i class="fas fa-search"></i><span>Daftar Jurusan</span></a></li>
                                <li><a href="daftar_kelas.php"><i class="fas fa-search"></i><span>Daftar Kelas</span></a></li>
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
                                                <li><a href="logout.php"><i class="fas fa-bars"></i> <span>Logout</span></a></li>
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
        <!-- jumbotron -->
        <div class="jumbotron jumbotron-fluid">
                <div class="container-fluid">
                    <div class="row no-gutters" id="isi-jumbotron">
                        <div class="col-sm-6 col-md-8" id="teks">
                            <h1 class="display-4">Fluid jumbotron</h1>
                            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                        </div>
                  <!-- waktu -->
                        <div class="col-6 col-md-4 align-self-center" id="waktu">
                                <div class="waktu d-flex justify-content-center">
                                            <div class="datetime">
                                                <div class="date">
                                                    <span id="dayname">Day</span>,
                                                    <span id="month">Month</span>
                                                    <span id="daynume">00</span>,
                                                    <span id="year">Year</span>
                                                </div>
                                                <div class="time">
                                                    <span id="hour">00</span>:
                                                    <span id="minutes">00</span>:
                                                    <span id="seconds">00</span>
                                                    <span id="period">AM</span>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                        <!-- waktu close -->

                        </div>
                </div>
            
        <!-- jumbotron close -->
        <!-- info panel -->
                <div class="container info-panel">
                        <div class="card">
                            <div class="card-body d-flex justify-content-center">
                                <div class="row card-isi2">
                                    <div class="col-8">
                                            <h5 class="card-title">Special title treatment</h5>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    </div>
                                    <div class="col-4">
                                            <img src="assets/image/rhaptalia.png" width="200px" height="200px" alt="">
                                    </div>
                                </div>
                            </div>
                    </div>
            </div>
            <!-- info panel -->

            <!-- card info -->
            <div class="container-md content2">
            <!-- progress bar -->
            <div class="container-fluid" id="isi2">
                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="col mb-4">
                                <div class="card" >
                                    <div class="card-header">
                                    <h3>Activity Progres</h3>
                                    </div>
                                    <div class="card-body" id="activity">
                                        
                                    </div>
                                </div>
                        </div>
                        <div class="col mb-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Progres Tracker</h3>
                                    </div>
                                        <div class="card-body" id="activity">
                                            <div class="taks">
                                                <span class="nama-taks">Absen</span>
                                                <div class="percent">
                                                    <div class="progres" style="width: 95%;"></div>
                                                </div>
                                                <div class="value">95%</div>
                                            </div>
                                            <div class="taks">
                                                <span class="nama-taks">Absen</span>
                                                <div class="percent">
                                                    <div class="progres" style="width: 95%;"></div>
                                                </div>
                                                <div class="value">95%</div>
                                            </div>
                                            <div class="taks">
                                                <span class="nama-taks">Absen</span>
                                                <div class="percent">
                                                    <div class="progres" style="width: 95%;"></div>
                                                </div>
                                                <div class="value">95%</div>
                                            </div>
                                            <div class="taks">
                                                <span class="nama-taks">Absen</span>
                                                <div class="percent">
                                                    <div class="progres" style="width: 95%;"></div>
                                                </div>
                                                <div class="value">95%</div>
                                            </div>
                                        </div>
                                </div>
                        </div>
                </div>
                </div>
                <!-- progres bar close -->

                <div class="row row-cols-1 row-cols-md-2">
                    <div class="col mb-4">
                        <div class="card text-white bg-primary mb-3">
                            <div class="card-icon">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="display-4">2009</p>
                            </div>
                            <div class="card-footer">
                                    <a href="#" class="card-link">Card link</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card text-white bg-secondary mb-3">
                                <div class="card-icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>    
                            <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="display-4">2009</p>
                            </div>
                            <div class="card-footer">
                                    <a href="#" class="card-link">Card link</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card text-white bg-warning mb-3">
                            <div class="card-icon">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="display-4">2009</p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="card-link">Card link</a>
                                </div>
                        </div>
                    </div>
                            <div class="col mb-4">
                                <div class="card text-white bg-dark mb-3">
                                    <div class="card-icon">
                                        <i class="fas fa-graduation-cap"></i>
                                    </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="display-4">2009</p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="card-link">Card link</a>
                            </div>
                            </div>
                        </div>
                </div>

<!-- progress bar -->
                <div class="container-fluid" id="isi2">
                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="col mb-4">
                                <div class="card" >
                                    <div class="card-header">
                                    <h3>Peningkatan Kehadiran</h3>
                                    </div>
                                    <div class="card-body" id="peningkatan">
                                                <canvas id="MyChart"></canvas>
                                    </div>
                                </div>
                        </div>
                        <div class="col mb-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Kehadiran Mahasiwa Hari ini</h3>
                                    </div>
                                        <div class="card-body" id="pie-chart">
                                                <canvas id="PieChart"></canvas>
                                        </div>
                                </div>
                        </div>
                </div>
                <!-- progres bar close -->

                <!-- table daftar -->
                <div class="container-fluid">
                    <div class="row" id="bungkus2">
                        <div class="card text-center" id="table">
                            <div class="card-header">
                                <h1>Daftar Mahasiswa</h1>
                            </div>
                                <div class="card-body">
                                    <!-- table -->
                                <table class="table">
                                        <thead>
                                            <tr>
                                            <th>No.</th>
                                            <th>Gambar</th>
                                            <th>NRP</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Jurusan</th>
                                            </tr>
                                            <?php $i = 1; ?>
                                            <?php foreach ($mahasiswa as $row) : ?>
                                                <tr>
                                                        <td><?= $i ?></td>
                                                        <td><img src="assets/image/<?=$row["gambar"];?>" width="80"></td>
                                                        <td><?=$row["nrp"];?></td>
                                                        <td><?=$row["nama"];?></td>
                                                        <td><?=$row["email"];?></td>
                                                        <td><?=$row["jurusan"];?></td>
                                                    </tr>
                                                    <?php $i++; ?>
                                                <?php endforeach; ?>
                                        </tbody>
                                        </table>
                                        <!-- close table -->
                                </div>
                            </div>
                    </div>
                </div>
                <!-- table daftar close -->
        </div>
</div>
<!-- card info  close-->

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>  
    <script src="assets/js/main.js"></script>
    <script src="assets/chartjs/chart.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>