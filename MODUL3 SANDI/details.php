<?php
require_once('connect.php');
$id = $_GET['id'];
$sql ="SELECT * FROM event_table WHERE id= $id";
$query = mysqli_query($conn, $sql);  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Event</title>
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
    <h3 class="text-center mt-4">DETAIL EVENTS!</h3>
        <?php 
            $data = mysqli_fetch_assoc($query); ?>
                    <div class="card col-sm-4 mt-5 mx-auto">
                    <img class="card-img-top" src="gambar/<?php echo $data['gambar']?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title my-3"><?= $data['name']?></h5>
                            <p class="card-text"><b>Deskripsi</b></p>
                            <p class="card-text"><?= $data['deskripsi']?></p>
                            <div class="row">
                            <p class="card-text ml-3"><b>Infomasi Event</b></p>
                            <p class="card-text mx-auto"><b>Benefit</b></p>
                            </div>
                            <div class="row">
                            <i class='fas fa-calendar-alt ml-3'> <?=$data['tanggal']?></i><br>
                            <ul
                            class="ml-5"><li><?=$data['benefit']?></li></ul>
                            </div>
                            <i class='fas fa-map-marker-alt'> <?=$data['tempat']?></i><br>
                            <i class='far fa-clock mt-3'> <?=$data['mulai']?> - <?=$data['berakhir']?></i>
                            <div class="row">
                            <p class="card-text ml-3 mt-3"><b>Kategori : </b></p>
                            <p class="mt-3">&nbsp;<?=$data['kategori']?></p>
                            </div>
                            <div class="row">
                            <p class="card-text ml-3"><b>HTM : Rp. </b></p>
                            <p class="card-text"><b><?=$data['harga']?></b></p>
                            </div>
                            </div>
                            
                            <div class="card-body mx-auto">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Update</button>
                            <a href="delete.php?id=<?=$data['id'];?>" class="btn btn-danger">Delete</a>
                        </div>
                        </div>
                        
                        
                        </div>
                        
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Edit Event</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
    <form action="update.php" method="post" enctype="multipart/form-data">
    <div class="container">
  <div class="row">
    <div class="col-sm-6">
    <div class="card">
      <div class="card-header bg-danger">
      </div>
      <input type="text" class="form-control input-sm" name="id" id="id" value="<?=$data['id'];?>"hidden>
      <div class="card-body">
      <label for=""><b>Name</b></label><br>
        <input type="text" class="form-control input-sm" name="nama" id="nama" value="<?=$data['name'];?>"required><br>
        <label for=""><b>Deskripsi</b></label><br>
        <textarea class="form-control" name="deskripsi" id="deskripsi" value="<?=$data['deskripsi'];?>" rows="8"><?=$data['deskripsi'];?></textarea>
        <label for=""><b>Upload Gambar</b></label><br>
        <input type="file" name="gambar" id="gambar" value="<?php echo $data['gambar']?>" ><br>
        <label for=""><b>Kategori</b></label><br>
        <input type="radio" id="online" name="kategori" value="online" <?php if($data['kategori']=="online"){echo "checked";}?>>
        <label for="" class="mr-4">Online</label>
        <input type="radio" id="offline" name="kategori" <?php if($data['kategori']=="offline"){echo "checked";}?> value="offline">
        <label for="">Offline</label><br>
      </div>
    </div>
    
    </div>
    <div class="col-sm-6">
    <div class="card">
      <div class="card-header bg-primary">
      </div>

      <div class="card-body">
      <label for=""><b>Tanggal</b></label><br>
        <input type="date" class="form-control input-lg" name="tanggal" id="tanggal" value="<?=$data['tanggal']?>"required><br>
        <div class="row">
            <div class="col-sm-6">
                <label for=""><b>Jam Mulai</b></label> <br>
                <input type="time" class="form-control" name="mulai" id="mulai" value="<?=$data['mulai']?>"required><br>
                </div>
            <div class="col-sm-6">
                <label for=""><b>Jam Berakhir</b></label> <br>
                <input type="time" class="form-control" name="berakhir" id="berakhir" value="<?=$data['berakhir']?>"required>
                </div>
        </div>
        <label for=""><b>Tempat</b></label><br>
        <input type="text" class="form-control input-sm"name="tempat" id="tempat" value="<?=$data['tempat']?>"required><br>
        <label for=""><b>Harga</b></label><br>
        <input type="" class="form-control input-sm"name="harga" id="harga" value="<?=$data['harga']?>"required><br>

        <?php
        $benefit = explode(",", $data['benefit']);;
        ?>
        <label for=""><b>Benefit</b></label><br>
                <div class="row">
                    <div class="col-sm-3">
                    <input  <?php if(in_array("snacks",$benefit)){echo "checked";}?> type="checkbox" name="benefit[]" value="snacks">
                    <label for=""> Snacks</label><br></div>
                    <div class="col-sm-3">
                    <input <?php if(in_array("sertifikat",$benefit)){echo "checked";}?> type="checkbox" name="benefit[]" value="sertifikat">
                    <label for=""> Sertifikat</label><br></div>
                    <div class="col-sm-3">
                    <input <?php if(in_array("souvenir",$benefit)){echo "checked";}?> type="checkbox" name="benefit[]" value="souvenir">
                    <label for=""> Souvenir</label><br></div>
                </div>
                    
    </div>
        
      </div>
</div>
    </div>
  </div>
    
        </div>
        <div class="modal-footer">
        <div class="row">
        <button type="button" class="btn btn-danger mx-2"name="cancel" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="submit" class="btn btn-primary">Save Changes</button>
                       
                    </div>
        </div>
        </form>
      </div>
      
    </div>
  </div>
</body>
</html>