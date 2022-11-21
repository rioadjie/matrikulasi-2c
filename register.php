<?php
include ('database.php');

// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
    // removes backslashes
$username = stripslashes($_REQUEST['username']);
    //escapes special characters in a string
$username = mysqli_real_escape_string($koneksi,$username); 
$password = stripslashes($_REQUEST['password']);
$password = mysqli_real_escape_string($koneksi,$password);
$id_role = stripslashes($_REQUEST['id_role']);
$id_role = mysqli_real_escape_string($koneksi,$id_role);
    $query = "INSERT into `user` (username, password, id_role) 
    VALUES ('$username', '$password', '$id_role')";
    $result = mysqli_query($koneksi,$query);
    if($result){
        echo "<div class='form'>
<h3>Registrasi Berhasil.</h3>
<br/>Klik disini untuk <a href='index.php'>Login</a></div>";
    }
}else{

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Matrikulasi 2C- Registrasi Akun Mahasiswa</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="row justify-content-center">
            <div class="text-align:center">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
    <!--                        <div class="col-lg-7">-->
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Buat Akun</h1>
                                    </div>
                                    <div class="card-body">
                                        <form name="regitrasi"action="" method="post">
                                        <div class="form-group">
                                            <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" id="confirm-password" name="confirm-password" class="form-control" placeholder="Confirm Password" required>
                                        </div>
                                        <div>
                                        <select class="form-select" arial-label="id_role" name="id_role">
                                            <option selected>Pilih Role Anda</option>
                                            <?php
                                            $sql=mysqli_query($koneksi, "SELECT * FROM user_role");
                                            while ($data=mysqli_fetch_array($sql)) { 
                                            ?>
                                            <option value="<?=$data['id_role']?>"><?=$data['id_role']?> - <?=$data['role']?></option>

                                            <?php } ?>
                                        </select>
                                        </div>
                                        <br>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Buat Akun</button>
                                        </div>
                                        </form>
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.php">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="index.php">Already have an account? Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php } ?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>