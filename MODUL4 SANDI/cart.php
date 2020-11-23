<?php 
include_once('db.php');
$db= new database();
session_start();
if(! isset($_SESSION['sudah_login']))
{
  header('location:login.php');
}
$id = $_SESSION['id'];
$tampil =$db->tampilbarang($id);
if(isset($_GET['delete']))
    {
        $idbrg = $_GET['delete'];
        $status = $db->hapusbarang($idbrg);
        if($status)
        {
            echo '<script type="text/javascript">'; 
      echo 'alert("Berhasil dihapus!");'; 
      echo 'window.location.href = "cart.php";';
      echo '</script>';
        }else{
            echo '<div class="alert alert-warning" role="alert">
            Gagal dihapus ! </div>'; 
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
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
    <div class="mt-4 ml-4 col col-sm-6 mx-auto">
    <table class="table table-bordered table-striped table-bordered">
        <thead class="thead-inverse">
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>     
            <?php 
            $nomor=1;
            $total = 0;
            foreach($tampil as $Data){
                echo"<tr>";
                echo"<td>".$nomor."</td>";
                echo"<td>".$Data['nama_barang']."</td>";
                echo"<td> Rp.".number_format($Data['harga'],0,",",".")."</td>";;
                echo "<td>
                <a class='btn btn-danger' href='cart.php?delete=".$Data['id']."'>Hapus</a></td>";
                echo "</tr>";
                $nomor++;
                $total +=$Data['harga'];
            }?>
            <tr>
                <td colspan="2" class="text-center">TOTAL</td>
                <td><?php 
                       echo "Rp.".number_format($total,0,",",".")            
                ?></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    </div>
</body>
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="index.php"> WAD BEAUTY</a>
  </div>
  <!-- Copyright -->

</footer>
</html>