<?php
include_once('db.php');
$db= new database();
session_start();
if(isset($_SESSION['sudah_login']))
{
  header('location:index.php');
}
if(isset($_POST['submit']))
{
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $nama = $_POST['nama'];
  $nohp = $_POST['nohp'];
  if ($_POST["pass"] === $_POST["konpass"]) {
    
    if($db->register($nama,$email,$nohp,$pass))
    {
      echo '<script type="text/javascript">'; 
      echo 'alert("Registrasi berhasil!");'; 
      echo 'window.location.href = "login.php";';
      echo '</script>';
    }else{
      echo '<script type="text/javascript">'; 
      echo 'alert("Registrasi gagal!");'; 
      echo 'window.location.href = "register.php";';
      echo '</script>';
    }
 }
 else {
  echo '<script type="text/javascript">'; 
  echo 'alert("Kata sandi tidak sama !");'; 
  echo 'window.location.href = "register.php";';
  echo '</script>';
 }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body style="background-color:#d1edf2;">
<nav class="navbar navbar-expand-sm navbar-light bg-light <?php echo $_COOKIE['navbar'] ?>">
        <a class="navbar-brand " href="index.php">WAD BEAUTY</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active mt-1 mr-2">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <ul class="navbar-nav ml-auto">
                <li class="nav-item active mt-1 mr-2">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
                </nav>

    <div class="card col-sm-3 mx-auto my-4">
      <div class="card-body">
        <h4 class="card-title">Registrasi</h4>
      </div>
      <div class="card-body">
      <form action="" method="Post">
        <label for="">Nama</label><br>
        <input type="text" class="form-control input-lg" name="nama" id="nama" placeholder="masukan nama" required><br>
        <label for="">E-mail</label><br>
        <input type="email" class="form-control input-lg" name="email" id="email" placeholder="masukan email" required><br>
        <label for="">No. Handphone</label><br>
        <input type="number" class="form-control input-lg" name="nohp" id="nohp" placeholder="masukan nomor handphone" required><br>
        <label for="">Kata Sandi</label><br>
        <input type="password" class="form-control input-lg" name="pass" id="pass" placeholder="masukan password" required><br>
        <label for="">Konfirmasi Kata Sandi</label><br>
        <input type="password" class="form-control input-lg" name="konpass" id="konpass" placeholder="konfirmasi password" required><br>
        <div class="text-center">
        <input type="submit" class="btn btn-primary" name="submit" value="Daftar">
        </div>
        </form>
      </div>
      
    </div>
</body>
</html>