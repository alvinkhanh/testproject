<?php
session_start();
// cek session
if( !isset($_SESSION["login"])){
    header("location: login.php");
    exit;
}

if( isset($_POST["register"])){

    if( registrasi($_POST) > 0 ) {
        echo " <script>
                    alert('user baru berhasil di tambahkan');
                    </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>