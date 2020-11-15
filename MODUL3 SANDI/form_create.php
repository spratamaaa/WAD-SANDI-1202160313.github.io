<?php
require_once('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Event</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

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
                    <a class="nav-link" href="home.php">Home </a>
                </li>
                <li class="nav-item">
                    <a type="button" class="btn btn-secondary" href="form_create.php">Buat Event<span class="sr-only">(current)</span></a>
                </li>
            </ul>
    </nav>
    <h3 class="mx-5 my-4">Buat Event</h3>
    <form action="create.php"method="post" enctype="multipart/form-data">
    <div class="container">
  <div class="row">
    <div class="col ">
    <div class="card">
      <div class="card-header bg-danger">
      </div>
      <div class="card-body">
      <label for=""><b>Name</b></label><br>
        <input type="text" class="form-control input-sm" name="nama" id="nama" required><br>
        <label for=""><b>Deskripsi</b></label><br>
        <textarea class="form-control" name="deskripsi" id="deskripsi" rows="9" required></textarea>
        <label for=""><b>Upload Gambar</b></label><br>
        <input type="file" name="gambar" id="gambar" required><br>
        <label for=""><b>Kategori</b></label><br>
        <input type="radio" id="online" name="kategori" value="online">
        <label for="" class="mr-4">Online</label>
        <input type="radio" id="offline" name="kategori" value="offline">
        <label for="">Offline</label><br>
      </div>
    </div>
    
    </div>
    <div class="col">
    <div class="card">
      <div class="card-header bg-primary">
      </div>

      <div class="card-body">
      <label for=""><b>Tanggal</b></label><br>
        <input type="date" class="form-control input-lg" name="tanggal" id="tanggal" required><br>
        <div class="row">
            <div class="col-sm-6">
                <label for=""><b>Jam Mulai</b></label> <br>
                <input type="time" class="form-control" name="mulai" id="mulai" required><br>
                </div>
            <div class="col-sm-6">
                <label for=""><b>Jam Berakhir</b></label> <br>
                <input type="time" class="form-control" name="berakhir" id="berakhir" required>
                </div>
        </div>
        <label for=""><b>Tempat</b></label><br>
        <input type="text" class="form-control input-sm"name="tempat" id="tempat" required><br>
        <label for=""><b>Harga</b></label><br>
        <input type="" class="form-control input-sm"name="harga" id="harga" required><br>
        <label for=""><b>Benefit</b></label><br>
                <div class="row">
                    <div class="col-sm-3">
                    <input type="checkbox" name="benefit[]" value="snacks">
                    <label for=""> Snacks</label><br></div>
                    <div class="col-sm-3">
                    <input type="checkbox" name="benefit[]" value="sertifikat">
                    <label for=""> Sertifikat</label><br></div>
                    <div class="col-sm-3">
                    <input type="checkbox" name="benefit[]" value="souvenir">
                    <label for=""> Souvenir</label><br></div>
                </div>
                    
    </div>
    <div class="row mx-auto">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        <input type="button" class="btn btn-danger mx-2"name="cancel" value="cancel" onClick="window.location.href='create.php';" />
                    </div>
      </div>
</div>
    </div>
  </div>
    </form>
</body>
</html>