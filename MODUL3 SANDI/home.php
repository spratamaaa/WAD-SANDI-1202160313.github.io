<?php
require_once('connect.php');
$sql ="SELECT * FROM eventtable";
$query = mysqli_query($conn, $sql);  
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
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary ">
        <a class="navbar-brand " href="home.php">EAD EVENTS</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a type="button" class="btn btn-secondary" href="form_create.php">Buat Event</a>
                </li>
            </ul>
    </nav>
    <h3 class="text-center mt-4">WELCOME TO EAD EVENTS!</h3>
   
    <div class="card-deck px-5">
        <?php 
        $angka=0;
                while($data = mysqli_fetch_assoc($query)){
                    ?>
                        <div class="card col-sm-3">
                        <img class="card-img-top" src="gambar/<?php echo $data['gambar']?>" alt="Card image cap" style="height:200px">
                            <div class="card-body">
                                <h5 class="card-title my-3"><?= $data['name']?></h5>
                                
                                <div class="row">
                                <i class='fas fa-calendar-alt ml-3'> <?=$data['tanggal']?></i><br>
                               
                                </div>
                                <i class='fas fa-map-marker-alt'> <?=$data['tempat']?></i><br>
                                <div class="row">
                                <p class="card-text ml-3"><b>Kategori: &nbsp;</b></p>
                                <p class="card-text">Event <?= $data['kategori']?></p>
                                
                                </div>
                                
                            </div>
                            
                            <div class="card-body">
                            <a type="button" class="btn btn-primary" href="details.php?id=<? $data['id']?>">Detail</a>
                            </div>
                            </div>
                   <?php $angka++;}?>
        </div>
        <h4 class="text-center mt-5" <?php if($angka != 0){echo "hidden";}?> >Data Tidak Ditemukan</h4>
</body>
</html>