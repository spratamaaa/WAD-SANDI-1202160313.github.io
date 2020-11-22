<?php 
include_once('db.php');
$db= new database();
session_start();
if(! isset($_SESSION['sudah_login']))
{
  header('location:login.php');
}
$id = $_SESSION['id'];
$tpl =$db->tampiluser($id);
if(isset($_POST['update']))
{
  $id = $_SESSION['id'];
  if($_POST['pass'] == null){
    $pass = $tpl['password'];
  }else{
    $pass = $_POST['pass'];
  }  
  
  $nama = $_POST['nama'];
  $nohp = $_POST['nohp'];
  
        if($db->update($nama,$nohp,$pass,$id,$conn))
        {
          echo '<script type="text/javascript">'; 
          echo 'alert("Update berhasil!");'; 
          echo 'window.location.href = "index.php";';
          echo '</script>';
        }else{
          echo '<script type="text/javascript">'; 
          echo 'alert("Update gagal!");'; 
          
          echo '</script>';
        }
    setcookie("navbar",$_POST['navbar'],time()+3600, "/","", 0);
     
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-light bg-light  <?php echo $_COOKIE['navbar'] ?>">
        <a class="navbar-brand " href="index.php">WAD BEAUTY</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active mt-1 mr-2">
                    <a class="nav-link fa fa-shopping-cart" href="cart.php"></a>
                </li>
                <li class="nav-item mt-2 mr-1">
                    <p  >Selamat Datang, </p>
                    <li class="nav-item dropdown mr-4">
                        <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?= $_SESSION['nama'];?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="profile.php">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                </li>
            </ul>
    </nav>
    <form action="" method="post">
    <div class="card col col-sm-6 mx-auto mt-4">
      <h3 class="text-center mt-4">Profile</h3>
      <div class="card-body">
      <div class="form-inline ml-5">
      <label class="card-title mr-auto">Email</label>
      <p for="" class="ml-5 col-lg-8"><?= $tpl['email']; ?></p>
      </div>
      <div class="form-inline ml-5">
      <label class="card-title mr-auto">Nama</label>
      <input type="text" class="form-control col-lg-8" name="nama" id="" value="<?= $tpl['nama']; ?>">
      </div>
      <div class="form-inline ml-5">
      <label class="card-title mr-auto">Nomor <br> Handphone</label>
      <input type="number" class="form-control col-lg-8" name="nohp" id="nohp" value="<?= $tpl['no_hp']; ?>">
      </div>
      <div class="form-inline ml-5">
      <label class="card-title mr-auto">Password</label>
      <input type="password" class=" form-control col-lg-8" name="pass" id="pass">
      </div>
      <div class="form-inline ml-5">
      <label class="card-title mr-auto">Konfirmasi <br> Password</label>
      <input type="password" class="form-control col-lg-8" name="konpass" id="konpass">
      </div>
      <div class="form-inline ml-5">
      <label class="card-title mr-auto">Warna <br> Navbar</label>
      <select name="navbar" id="navbar">
      <option value="bg-light" <?php if($_COOKIE['navbar'] == "bg-light"){
            echo "selected";
      }?>>Light</option>
      <option value="bg-dark" <?php if($_COOKIE['navbar'] == "bg-dark"){
            echo "selected";
      }?>>Dark</option>
      </select>
      </div>
      </div>
      <input type="submit" name="update" class="btn btn-primary col-lg-4 mx-auto mt-4" value="submit">
      <a href="index.php" class="btn btn-secondary col-lg-4 mx-auto my-3" >Cancel </a>
      </form>
    </div>
    
</body>
</html>