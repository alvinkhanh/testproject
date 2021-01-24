<?php 
session_start();
// cek session
if($_SESSION['role']==""){
  header("location: login.php?pesan=gagal");
 }
require 'assets/function/function.php';

$id	= $_GET["id"];

if (hapus_dosen($id) > 0) {
  echo "
        <script>
          alert('data berhasil hapus');
          document.location.href = 'daftar_dosen.php';
        </script>
        ";
     } else{
     echo "<script>
        alert('data gagal dihapus');
        document.location.href = 'daftar_dosen.php';
      </script>
      ";
      }

 ?>