<?php
if(isset($_POST["url"])){
    $url = $_POST["url"];
}else{
    $url = "https://th.bing.com/th/id/OIP.lqQBTL9Vr-DXXP2jzU26DAHaFj?pid=Api&rs=1";
}
if(isset($_POST["jenis"])){
    $jenis = $_POST["jenis"];
    
}else{
    $jenis = null;
    
}

?>

<html>
    <head>
        <title>Booking</title>
        
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
                        <li class="nav-item">
                            <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="booking.php">Booking</a>
                        </li>    
                    </ul>
                </div>
            </nav>
    <div class="row mt-5 mx-3 justify-content-center"> 
        <div class="col-4"> 
            <form action="mybooking.php" method="post">
      <label >Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
        <label >Check-in</label>
        <input type="date" class="form-control" id="date" name="date">
        <label >Duration</label>
        <input type="text" class="form-control" id="duration" name="duration">
        <label ><small>Day(s)</small></label><br>
        <label >Room Type</label><br>
            <select name="jenis" id="jenis">
                <option value="<?php echo $jenis?>" selected><?php echo $jenis?></option>
                <option value="Standard">Standard</option>
                <option value="Superior">Superior</option>
                <option value="Luxury">Luxury</option>
            </select><br>
        <label >Add Service(s)</label><br>
        <label ><small>$20/service</small></label><br>
        <input type="checkbox" name="service1" id="service1" value="Room Service">
            <label >Room Service</label> <br>
        <input type="checkbox" name="service2" id="service2" value="Breakfast">
            <label >Breakfast</label> <br>
        <label for="Phone Number">Phone Number</label><br>
        <input type="text" class="form-control"name="phnumber" id="phnumber" class=""><br>
        <button type="submit" class="btn btn-primary btn-lg btn-block mt-2">Book</button>
      </form>
    </div>
    <div class="col-4">
        <img src="<?php echo $url?>" style="width:28rem"></div>
       </div>
     
        
    

</body>
</html>