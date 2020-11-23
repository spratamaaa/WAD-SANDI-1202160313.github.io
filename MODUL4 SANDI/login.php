<?php
session_start();
include_once('db.php');
$db= new database();
if(isset($_SESSION['sudah_login']))
{
    header('location:index.php');
}
if(isset($_COOKIE['email']))
{
  $db->relogin($_COOKIE['email']);
  header('location:index.php');
}

if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    if(isset($_POST['remember']))
    {
      $remember = TRUE;
    }
    else
    {
      $remember = FALSE;
    }
 
    if($db->login($email,$pass,$remember))
    {
      echo '<script type="text/javascript">'; 
      echo 'alert("login berhasil!");'; 
      echo 'window.location.href = "index.php";';
      echo '</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        <h4 class="card-title">Login</h4>
      </div>
      <form action="" method="post">
      <div class="card-body">
        <label for="">E-mail</label><br>
        <input type="email" class="form-control input-lg" name="email" id="email" placeholder="masukan email" required><br>
        <label for="">Kata Sandi</label><br>
        <input type="password" class="form-control input-lg" name="pass" id="pass" placeholder="masukan password" required><br>
        <input type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE["user_login"])) { ?> checked <?php } ?> />
		    <label for="remember-me">Remember me</label><br>
        <div class="text-center">
        <input type="submit" class="btn btn-primary" name="login" value="Login">
        </form>
        <p>belum punya akun ? <a href="register.php">registrasi</a></p>
        </div>
      </div>
      
    </div>
</body>
</html>