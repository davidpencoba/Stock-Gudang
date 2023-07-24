<?php
require 'function.php';

// cek lgon terdaftar atau tidak
if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password= $_POST['password'];
    // Cek ke DB apakah data ada
    $cekdatabase = mysqli_query($conn, "SELECT * FROM login where email= '$email' and password = '$password'");
    // Hitung Jumlah Data
    $hitung = mysqli_num_rows($cekdatabase);

    if($hitung>0) {
        $_SESSION['log'] = 'true';
        header('location:index.php');
    } else {
        header('location:login.php');
    };
    };

    // jika sudah login
    if(!isset($_SESSION['log'])) {
     } else {
        header('location: index.php');
     }



?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form  method="post">
                                            <div class="form-group">
                                            <label class="small mb-2" for="inputEmailAddress">Email</label>
                                            <input class="form-control py-4" name="email" id="inputEmailAddress" type="email" placeholder="name@example.com" />
                                            </div>

                                            <div class="form-group">
                                            <label class="small mb-2" for="inputPassword">Password</label>
                                            <input class="form-control py-4" name="password" id="password" type="password" placeholder="password" />
                                            </div>
                                            
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" name="login">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
          
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
