<?php 

?>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
    <body>
        
            <nav class="navbar navbar-expand-sm justify-content-center navbar-dark bg-primary ">
                <div >
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="booking.php">Booking</a>
                        </li>    
                    </ul>
                </div>
            </nav>
        <div class="container">
            <h3 class="text-primary text-center mt-3">EAD HOTEL</h3>
            <br>
            <h5 class="text-primary text-center">Welcome To 5 Star Hotel</h5>
         </div>
         
        <div class="card-columns border-primary mx-5 mt-4 text-center">
            <div class="card" >
            <img class="card-img-top" src="https://th.bing.com/th/id/OIP.vuRkWoY0aIEBO-hHnpnYJQHaE8?pid=Api&rs=1">
            <div class="card-body">
                <h4 class="card-title text-center">Standard</h4>
                <h3 class="text-primary text-center">$ 90/Day</h3>
            </div>
            <div class="card-header">Facilities</div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">1 Single Bed</li>
                <li class="list-group-item">1 Bathroom</li>
            </ul>
            <div class="card-body">
                <form action="booking.php" method="post">
                    <input name="url" value="https://th.bing.com/th/id/OIP.vuRkWoY0aIEBO-hHnpnYJQHaE8?pid=Api&rs=1" hidden>
            <input name="jenis" value="Standard" hidden>
            <button type="submit" class="btn btn-primary">Book now</button>
                </form>
            </div>
            </div><div class="card" >
            <img class="card-img-top" src="http://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/86/2018/12/18015307/Superior-king-bed-room-cottage-at-pullman-danang-beach-resort-vietnam.jpg" >
            <div class="card-body">
                <h4 class="card-title text-center">Superior</h4>
                <h3 class="text-primary text-center">$ 150/Day</h3>
            </div>
            <div class="card-header">Facilities</div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">1 Double Bed</li>
                <li class="list-group-item">1 Television and Wifi</li>
                <li class="list-group-item">1 Bathroom with hot water</li>
            </ul>
            <div class="card-body">
                <form action="booking.php" method="post">
            <input name="url" value="http://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/86/2018/12/18015307/Superior-king-bed-room-cottage-at-pullman-danang-beach-resort-vietnam.jpg" hidden>
            <input name="jenis" value="Superior" hidden>
            <button type="submit" class="btn btn-primary">Book now</button>
                </form>
            </div>
            </div><div class="card" >
            <img class="card-img-top" src="https://th.bing.com/th/id/OIP.ay2-K75juyHAkCWdZhlBIwHaE3?pid=Api&rs=1" >
            <div class="card-body">
                <h4 class="card-title text-center">Luxury</h4>
                <h3 class="text-primary text-center">$ 200/Day</h3>
            </div>
            <div class="card-header">Facilities</div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">2 Double Bed</li>
                <li class="list-group-item">2 Bathroom with hot water</li>
                <li class="list-group-item">1 Kitchen</li>
                <li class="list-group-item">1 Television and Wifi</li>
                <li class="list-group-item">1 Workroom</li>
            </ul>
            <div class="card-body">
                <form action="booking.php" method="post">
                    <input name="url" value="https://th.bing.com/th/id/OIP.ay2-K75juyHAkCWdZhlBIwHaE3?pid=Api&rs=1" hidden>
            <input name="jenis" value="Luxury" hidden>
            <button type="submit" class="btn btn-primary">Book now</button>
                </form>
            </div>
</div>
        </div>
        
    </body>
</html>