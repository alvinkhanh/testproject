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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- my css -->
    <link rel="stylesheet" href="assets/css/content.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <!-- <link rel="stylesheet" href="assets/css/card.css"> -->
    <title>Project 1</title>
</head>
<body>
<style>
            body {font-family: Arial;}

            /* Style the tab */
            .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
            }

            /* Style the buttons inside the tab */
            .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
            }

            /* Change background color of buttons on hover */
            .tab button:hover {
            background-color: #ddd;
            }

            /* Create an active/current tablink class */
            .tab button.active {
            background-color: #ccc;
            }

            /* Style the tab content */
            .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
            }
</style>
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
            <small>Jadwal Kuliah</small>
        </h1>
    </div>
</div>

<!-- Isi -->
<div class="row">
    <div class="col-lg-5">
        <h3 class="page-header">
            Tambah Jadwal Kuliah
        </h3>
        <form method="post">
        <div class="col-lg-12">
                    <div class="form-group">
                        <label>Hari</label>
                        <select name="hari" class="form-control" required>
                            <option value="">Pilih Hari</option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jumat">Jum'at</option>
                            <option value="Sabtu">Sabtu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jurusan</label>
                        <select name="jurusan" id="jurusan" class="form-control" required>
                                <option value=""></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kelas</label>
                        <select name="kelas" id="kelas" class="form-control" required>
                                <option value=""></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Dosen & Matkul</label>
                        <select name="mengajar" id="mengajar" class="form-control" required>
                                <option value=""></option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Jam Mulai</label>
                        <input type="time" class="form-control" name="jam_masuk" required>
                    </div>
                    <div class="form-group">
                        <label>Jam Selesai</label>
                        <input type="time" class="form-control" name="jam_keluar" required>
                    </div>
                    <button type="submit" name="input" class="btn btn-primary" value="Input"/> Tambah </button>
                </div>
        </form>

        <!-- Script Input -->
        <?php
        if(@$_POST['input']){
            $hari=$_POST['hari'];
            $jurusan=$_POST['jurusan'];
            $mengajar=$_POST['mengajar'];
            $kelas=$_POST['kelas'];
            $jam_masuk=$_POST['jam_masuk'];
            $jam_keluar=$_POST['jam_keluar'];
            
            
            $query=mysqli_query($conn, "insert into jadwal( hari, kode_jurusan, id_mengajar, id_kelas, jam_masuk, jam_keluar) 
                                values('$hari','$jurusan','$mengajar','$kelas', '$jam_masuk', '$jam_keluar')") 
                                or die (mysqli_error());
            
            if($query){
            ?>
                <script type="text/javascript">
                alert("Input Data Sukses !")
                window.location="jadwal_kuliah.php";
                </script>
            <?php
            }else{
            ?>
                <script type="text/javascript">
                alert("Input Data Gagal !")
                window.location="jadwal_kuliah.php";
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
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-12">
            <div class="tab">
                <?php
                    $kelas2 = mysqli_query($conn, "select * from jurusan");
                    while($row2=mysqli_fetch_array($kelas2)){
                    $kelas=$row2['kode_jurusan'];
                     // $kelas3 = mysqli_query($conn, "SELECT * from jurusan where nama_jurusan = '$kelas'");
                     // $ruw = mysqli_fetch_array($kelas3);
                     ?>
                            
                    <button class="tablinks" onclick="openCity(event, '<?php echo $row2['kode_jurusan']; ?>')"><?php echo $row2['nama_jurusan']; ?></button>
                    <?php
                        }
                    ?>
            </div>
            <?php
                $kelas2 = mysqli_query($conn, "select * from jurusan");
                while($row2=mysqli_fetch_array($kelas2)){
                $kelas=$row2['kode_jurusan'];
                 // $kelas3 = mysqli_query($conn, "select * from jurusan where nama_jurusan = '$kelas'");
                // $ruw = mysqli_fetch_array($kelas3);
                ?>
                <div id="<?php echo $row2['kode_jurusan']; ?>" class="tabcontent">                               
                   <h4 class="page-header" style="margin-top:7px;" align="center">
                      Daftar Kelas
                    </h4>
                    <div class="col-lg-12">
                        <div class="tab">
                            <?php
                                $kelas2 = mysqli_query($conn, "SELECT * FROM kelas WHERE kode_jurusan='$kelas' ");
                                while($row2=mysqli_fetch_array($kelas2)){
                                $kelas=$row2['kelas'];
                                // $kelas3 = mysqli_query($conn, "SELECT * from jurusan where nama_jurusan = '$kelas'");
                                // $ruw = mysqli_fetch_array($kelas3);
                                ?>
                                        
                                <button class="tablinks" onclick="openCity(event, '<?php echo $row2['kelas']; ?>')"><?php echo $row2['kelas']; ?></button>
                                <?php
                                    }
                                ?>
                        </div>
                        </div>
            <!-- akhir coba -->
                </div> 
            <?php
                  }
             ?>          
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/jadwal.js"></script>
    
    <script>
            function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
            }
</script>
</body>
</html>

                                   <!-- table hari -->
                                    <!-- <div class="row">
                                    <div class="col-lg-6">
                                    <table class="table table-hover table-bordered table-striped">
                                    <h4 class="page-header" style="margin-top:7px;" align="center">
                                        SENIN
                                    </h4>
                                        <thead>
                                            <tr>
                                            <th class="col-md-4">Waktu</th>
                                            <th class="col-md-2">MP</th>
                                            <th class="col-md-2">KG</th>
                                            <th class="col-md-4">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 1;?>

                                                <?php
                                                    // $view1=mysqli_query($conn, "SELECT 
                                                    // kelas.id, kelas.kode_jurusan, kelas.nama_jurusan, kelas.kelas, jurusan.id, jurusan.kode_jurusan, jurusan.nama_jurusan
                                                    // FROM kelas, jurusan
                                                    // WHERE kelas.id=jurusan.id AND kelas.kode_jurusan=jurusan.kode_jurusan AND kelas.nama_jurusan='$kelas
                                                    // order by nama_jurusan asc");
                                                    $view1= mysqli_query($conn, "SELECT * FROM kelas WHERE nama_jurusan= '$kelas'");
                                                    while($raw1=mysqli_fetch_array($view1)){
                                                    // ?>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td><?php echo $raw1['kelas'];?></td>
                                                <td><i><a href="?page=editroster&id=<?php echo $raw1['id_jadwal'];?>">Edit</a> / <a onclick="return confirm('Yakin akan hapus data ini ?')" href="roster_hapus.php?id=<?php echo $raw1['id_jadwal'];?>">Hapus</a></i></td>
                                            </tr>
                                            <?php
                                                    }
                                                ?>
                                                 <?php
                                                    $i++;
                                                ?>
                                        </tbody>
                                    </table>
                                </div> -->
                                <!-- table hari close -->