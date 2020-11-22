<?php 
session_start();
session_unset();
session_destroy();
setcookie('id', '', 0, '/');
setcookie('email', '', 0, '/');
setcookie('nama', '', 0, '/');
setcookie('navbar', '', 0, '/');
header('location:login.php');
?>