<?php
require_once('connect.php');
 if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $desc = $_POST['deskripsi'];
    $kategori = $_POST['kategori'];
    $tanggal = $_POST['tanggal'];
    $mulai = $_POST['mulai'];
    $berakhir = $_POST['berakhir'];
    $tempat = $_POST['tempat'];
    $harga = $_POST['harga'];
    $benefit =implode(",", $_POST['benefit']);;
    $rand = rand();
    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['gambar']['name'];
    $ukuran = $_FILES['gambar']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if($filename == null) {
    $sql = "UPDATE event_table SET name= '$nama',deskripsi= '$desc',kategori= '$kategori',tanggal= '$tanggal',mulai= '$mulai',berakhir= '$berakhir',tempat= '$tempat',harga= '$harga',benefit= '$benefit'WHERE id= '$id'";
        $query = mysqli_query($conn,$sql);
        if($query){
            echo '<script type="text/javascript">';
            echo 'alert("Data berhasil diubah!");'; 
        echo 'window.location.href = "home.php";';
        echo '</script>';
    }else{
        echo '<script type="text/javascript">';
            echo 'alert("Data update tanpa file gagal!");'; 
        echo 'window.location.href = "home.php";';
        echo '</script>';
    }	
}else{	
		$gambar = $rand.'_'.$filename;
		move_uploaded_file($_FILES['gambar']['tmp_name'], 'gambar/'.$rand.'_'.$filename);
        $sql = "UPDATE event_table SET name= '$nama',deskripsi= '$desc',gambar= '$gambar',kategori= '$kategori',tanggal= '$tanggal',mulai= '$mulai',berakhir= '$berakhir',tempat= '$tempat',harga= '$harga',benefit= '$benefit'WHERE id= '$id'";
        $query = mysqli_query($conn,$sql);
        if($query){
            echo '<script type="text/javascript">';
            echo 'alert("Data berhasil diubah!");'; 
        echo 'window.location.href = "home.php";';
        echo '</script>';
        }else{
            echo '<script type="text/javascript">';
            echo 'alert("Data update dengan file gagal!");'; 
        echo 'window.location.href = "home.php";';
        echo '</script>';
        }	
	
}
   
}else{
    echo '<script type="text/javascript">';
    echo 'alert("gagal!");'; 
        echo 'window.location.href = "home.php";';
        echo '</script>';
}
?>