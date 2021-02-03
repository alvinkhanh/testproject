<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
require 'assets/function/function.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password3'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"SELECT * FROM users WHERE username='$username' and password='$password3'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

 $data = mysqli_fetch_assoc($login);

 // cek jika user login sebagai admin
 if($data['role']=="admin"){

  // buat session login dan username
  $_SESSION['username'] = $username;
  $_SESSION['role'] = "admin";
  // alihkan ke halaman dashboard admin
  header("location:index.php");

 // cek jika user login sebagai pegawai
 }else if($data['role']=="dosen"){
  // buat session login dan username
  $_SESSION['username'] = $username;
  $_SESSION['role'] = "dosen";
  // alihkan ke halaman dashboard pegawai
  header("location:halaman_pimpinan.php");

 }else{

  // alihkan ke halaman login kembali
  header("location:index.php?pesan=gagal");
 } 
}else{
 header("location:index.php?pesan=gagal");
}

?>