<?php 
include_once('db.php');
$db= new database();
session_start();
if(! isset($_SESSION['sudah_login']))
{
  header('location:login.php');
}
if(isset($_POST['tambah_barang'])){
    $id = $_SESSION['id'];
    $nama = $_POST['namabrg'];
    $harga = $_POST['hargabrg'];

    if($db->tambahbarang($id,$nama,$harga)){
        echo '<div class="alert alert-warning" role="alert">
        Berhasil ditambahkan ! </div>';   
    }else{
        echo '<div class="alert alert-warning" role="alert">
        Gagal ditambahkan ! </div>';  
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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

    <div class="col col-sm-9 mt-3 py-2 pt-3 mx-auto " style=" background: linear-gradient(to left, #ccffcc 3%, #ff99cc 104%);"> 
        <h3 class="text-center">WAD Beauty</h3>
        <p class="text-center mb-5">Tersedia Skin Care dengan harga murah tapi tidak murahan dan berkualitas</p>
    <div class="card-group mt-3 mx-auto">
        <div class="card">
            
            <div class="card-body">
                <img class="card-img-top" src="https://www.celebon.co.id/wp-content/uploads/2018/09/vitamin.png" alt="Card image cap">
                <h4 class="card-title">Celebon Vitamin Collagen Essence Mask</h4>
                <p class="card-text">CELEBON VITAMIN Collagen Essence Mask merupakan lembar masker berkualitas tinggi yang menempel pada wajah dengan baik. Mengandung vitamin C yang dapat membuat kulit Anda bersih dan cerah dan serta membuat kulit yang lelah dari aktivitas seharai-hari lebih sehat dan bersih. Vitamin E dan kolagen memberikan nutrisi untuk kulit yang lelah serta membuat kulit cerah. Memberikan kesegaran seketika di kulit wajah Anda.</p>
            </div>
            <div class="card-body">Rp 24.000</div>
            <div class="card-footer mx-auto">
            <form action="" method="post">
            <input type="text" name="namabrg" id="namabrg" value="Celebon Vitamin Collagen Essence Mask" hidden>
            <input type="number" name="hargabrg" id="hargabrg" value="24000" hidden>
            <input type="submit" class="btn btn-primary" name="tambah_barang" value="Tambahkan ke keranjang">
            </form>
            </div>
        </div>
        <div class="card">
           
            <div class="card-body">
                <img class="card-img-top" src="https://www.celebon.co.id/wp-content/uploads/2018/09/Vitamin-facial-foam.png" alt="Card image cap">
                <h4 class="card-title ">Celebon Vitamin Facial Foam</h4>
                <p class="card-text">Celebon Vitamin Facial Foam memiliki busa halus pembersih pori yang mampu membersihkan kotoran yang menempel pada pori pori secara mendalam. Kaya akan vitamin C penambah kadar air, menjaga kulit tetap segar setelah dibersihkan. Ekstrak plum gailardia melindungi kulit dari lingkungan luar.</p>
                <div class="card-body">Rp 94.500</div>
                
            </div>
            <div class="card-footer mx-auto">
            <form action="" method="post">
            <input type="text" name="namabrg" id="namabrg" value="Celebon Vitamin Facial Foam" hidden>
            <input type="number" name="hargabrg" id="hargabrg" value="94500" hidden>
            <input type="submit" class="btn btn-primary" name="tambah_barang" value="Tambahkan ke keranjang">
            </form>
            </div>
        </div>
        <div class="card">
            
            <div class="card-body">
                <img class="card-img-top" src="https://www.celebon.co.id/wp-content/uploads/2020/05/ceramide-pink2.png" alt="Card image cap">
                <h4 class="card-title">Celebon Ceramide Pink Microfiber Mask</h4>
                <p class="card-text">Ceramide Pink Microfiber Mask ini dapat menempel sempurna pada kulit sehingga dapat mengantarkan komponen aktif kepada kulit secara efektif. Dengan mengangkat partikel debu & menyerapnya diantara lapisan sehingga dapat menangkap berbagai kotoran sambil merawat kulit kamu. Dengan kandungan CERAMIDE, memperkuat lapisan kulit dari polusi lingkungan & mempertahankan kelembapan kulit.</p>
                <div class="card-body">Rp 20.000 </div>
            </div>
            <div class="card-footer mx-auto">
            <form action="" method="post">
            <input type="text" name="namabrg" id="namabrg" value="Celebon Ceramide Pink Microfiber Mask" hidden>
            <input type="number" name="hargabrg" id="hargabrg" value="20000" hidden>
            <input type="submit" class="btn btn-primary" name="tambah_barang" value="Tambahkan ke keranjang">
            </form>
            </div>
        </div>
    </div>
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