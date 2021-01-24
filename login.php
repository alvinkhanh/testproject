<?php 
session_start();
// cek session

   if( isset($_SESSION["role"])){
    header("location: index.php");
    exit;
}

 

require 'assets/function/function.php';

// cek tombol register
if( isset($_POST["register"]) ) {
// fungsi registrasi
    if( registrasi($_POST) > 0 ) {
        echo " <script>
                    alert('user baru berhasil di tambahkan');
                    </script>";
        } else {
            echo mysqli_error($conn);
        }
}

// cek tombol login
if (isset($_POST["login"])) {

            $username = $_POST["username"];
            $password3 = $_POST["password3"];
    
            $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

            // cek username
            if (mysqli_num_rows($result) ===1 ) {
            // cek password 
            $row = mysqli_fetch_assoc($result);
            // fungsi password
            if ( password_verify($password3, $row["password"])){
                // session
                if($row['role']=="admin"){

                            //   buat session login dan username
                            $_SESSION['username'] = $username;
                            $_SESSION['role'] = "admin";
                            // alihkan ke halaman dashboard admin
                            header("location: index.php");

                            // cek jika user login sebagai pegawai
                    }else if($row['role']=="dosen"){
                            // buat session login dan username
                            $_SESSION['username'] = $username;
                            $_SESSION['role'] = "dosen";
                            // alihkan ke halaman dashboard pegawai
                            header("location: dosen/index.php");
                                            exit;
                                        }
                                    }
// bila tidak ada username atau pass
        $error = true;
    }
}



?>

<!doctype html>
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
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Login</title>
    </head>
         <body>
                <div class="container">
                    <section class="sign-in">
            <!--main-sign-in-page---------->
                        <div class="main-page">
            <!--phone-top-bar-screen--------->
                <div class="top-bar"></div>
                <!-- kalau gagal login -->
                <?php if(isset($error)) : ?>
                    <div class="container">
                        <div class="box" id="error">
                            <div class="square" style="--i:0;"></div>
                            <div class="square" style="--i:1;"></div>
                            <div class="square" style="--i:2;"></div>
                            <div class="square" style="--i:3;"></div>
                            <div class="square" style="--i:4;"></div>
                        </div>
                    </div>
                        <div class="container-fluid">
                            <p>username / password salah</p>
                        </div>
                <?php endif;?>
            <!--name------------->
                <div class="name">
                    <h1>Furey</h1>
                    Sign In page Design For Your Website Using Html
                    
                </div>
            <!--btns---------------------->
            <div class="form-btns">
                <button class="s-btn">Sign In</button>
            <!--facebook---------->
                <button class="f-btn">Sign In with Facebook</button>
            <!--new-account------>
                <a class="new-btn" href="#">New Account ?</a>
                </div>
            <!--cancel-btn------------>
                <div class="cancel">
                    <a href="#"><i class="fas fa-times"></i></a>
                </div>
            </div>
            <!--sign-in-page--------------->
            <div class="sign-in-page">
            <section>
                        <div class="color"></div>
                        <div class="color"></div>
                        <div class="color"></div>
                </section>
                    <div class="box">
                        <div class="container">
                            <form action="" method="post">
                                <h2 class="title">Sign in</h2>
                                <img src="assets/image/rhaptalia.png" alt="">
                                    <div class="input-field">
                                        <span class="fas fa-user"></span>
                                        <input type="text" placeholder="masukan username" name="username" id="username" required>
                                    </div>
                                    <div class="input-field">
                                        <span class="fas fa-lock"></span>
                                        <input type="password" placeholder="input password" id="password3" name="password3" required>
                                    </div>
                                    <input type="submit" value="login" name="login" class="btn">
                        </form>
                    </div>
                </div>
            </div>
            <!--sign-up-page--------------->
            <div class="sign-up-page">
                <section>
                        <div class="color"></div>
                        <div class="color"></div>
                        <div class="color"></div>
                </section>
                <div class="box">
                        <div class="container">
                            <form action="" method="post">
                            <h2 class="title">Sign Up</h2>
                            <div class="input-field">
                                <span class="fas fa-user"></span>
                                <input type="text" placeholder="username" name="username2" id="username2" required>
                            </div>
                            <div class="input-field">
                                <span class="fas fa-envelope"></span>
                                <input type="email2" placeholder="email" name="email2" id="email2" required>
                            </div>
                            <div class="input-field">
                                    <span class="fas fa-lock"></span>
                                    <input type="password" placeholder="input password" name="password" id="password" required>                 
                            </div>
                            <div class="input-field">
                                <span class="fas fa-lock"></span>
                                <input type="password" placeholder="input ulang password anda" name="password2" id="password2" required>
                            </div>
                                <input type="submit" value="sign-up" class="btn register" name="register" id="tombol">
                            </form>
                        </div>
                </div>
            </section>
            <!--background-circule-------------------->
            <div class="bg-circule">
            </div>
            </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>  
    <script src="assets/js/login.js"></script>
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>