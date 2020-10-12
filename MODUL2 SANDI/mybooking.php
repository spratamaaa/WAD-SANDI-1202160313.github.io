<?php
$nama = $_POST["name"];
$date = $_POST["date"];
$duration = $_POST["duration"];
$jenis = $_POST["jenis"];
$ordernum = rand(1000,9999);
$phone= $_POST["phnumber"];
$checkout = date('Y-m-d', strtotime('+'.$duration.'days', strtotime($date)));
if($jenis == "Standard"){
    $price = 90;
}else if($jenis == "Superior"){
    $price = 150;
}else if($jenis == "Luxury"){
    $price = 200;
}
if(isset($_POST["service1"])){
    $service1 = $_POST["service1"];
    $serviceprice1 = 20;
}
else{
    $service1 = null;
    $serviceprice1 = null;
}
if(isset($_POST["service2"])){
    $service2 = $_POST["service2"];
    $serviceprice2 = 20;
}
else{
    $service2 = null;
    $serviceprice2 = null;
}
$total = $price*$duration+$serviceprice1+$serviceprice2;
?>

<html>
<head>
<title>My Booking</title>
        
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
            <table class="table table-striped mt-5 mx-auto w-auto text-center">
    <thead>
      <tr>
        <th>Booking Number</th>
        <th>Name</th>
        <th>Check-in</th>
        <th>Check-out</th>
        <th>Room type</th>
        <th>Phone Number</th>
        <th>Service</th>
        <th>Total Price</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $ordernum?></td>
        <td><?php echo $nama?></td>
        <td><?php echo $date?></td>
        <td><?php echo $checkout?></td>
        <td><?php echo $jenis?></td>
        <td><?php echo $phone?></td>
        <td><ul><li><?php if ($service1 && $service2 != null){
        echo $service1;
        echo "<br>";
        echo $service2;
        }else if($service1 != null){
            echo $service1;
        }else if($service2 != null){
            echo $service2;
        }else{
        echo "No Service";
        }
?></li></ul></td>
        <td><?php echo $total?></td>
      </tr>

    </tbody>
  </table>
</div>
    
    

</body>
</html>