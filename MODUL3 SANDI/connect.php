<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "modul3_crud";

$conn = mysqli_connect($host,$user,$pass,$db);
if(!$conn) {
    echo '<script language="javascript">';
    echo 'alert("Koneksi ke Basis Data gagal dilakukan")';
    echo '</script>';
  } 
?>