<?php
$host = "localhost";
$user = "root";
$db = "wad_modul3_sandi";

$conn = mysqli_connect($host,$user,$pass,$db);
if(!$conn) {
    echo '<script language="javascript">';
    echo 'alert("Koneksi ke Basis Data gagal dilakukan")';
    echo '</script>';
  } 
?>