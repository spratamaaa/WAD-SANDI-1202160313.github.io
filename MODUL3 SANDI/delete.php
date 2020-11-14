<?php
require_once('connect.php');
$id =$_GET['id'];
$query="DELETE FROM event_table WHERE id='$id'";
$delete_query = mysqli_query($conn,$query);
  if($delete_query) {
    echo '<script type="text/javascript">'; 
        echo 'alert("Data berhasil Dihapus!");'; 
        echo 'window.location.href = "home.php";';
        echo '</script>';
  } else {
    echo '<script language="javascript">window.alert("Gagal Menghapus Data");</script>';
  }
?>