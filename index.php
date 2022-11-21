<?php
    require_once ('database.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Matrikulasi 2C - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="text-align:center">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="content">
                            <div class="card-login">
                                <div class="card-main p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome to Matrikulasi 2C</h1>
                                    </div>

                                    <?php 
                                    if(isset($_GET['pesan'])) {
                                        if($_GET['pesan']=="gagal") {
                                            echo "<div class='alert'>Username dan Password tidak sesuai!</div>";
                                        }
                                    }
                                    ?>
                                    <form action="cek_login.php" method="post" align="center">
                                        <div class="form-group">
                                            <input type="text" name="username" class="form_login" placeholder="Username ..." required="required">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form_login"
                                            placeholder="Password ..." required="required">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <input type="submit" class="tombol_login" value="LOGIN">
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" href="forgot-password.php">Lupa Password?</a>
                                        </div>
                                        <div class="text-center">
                                            <a class="small" href="register.php">Buat Akun</a>
                                        </div>
                                        <br>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>