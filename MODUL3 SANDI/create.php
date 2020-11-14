<?php
require_once('connect.php');
 if(isset($_POST['submit'])){
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
 
if(!in_array($ext,$ekstensi) ) {
	echo '<script type="text/javascript">';
    echo ' alert("ekstensi salah!")';
    echo '</script>';
}else{	
		$gambar = $rand.'_'.$filename;
		move_uploaded_file($_FILES['gambar']['tmp_name'], 'gambar/'.$rand.'_'.$filename);
        $sql = "INSERT INTO event_table (id,name,deskripsi,gambar,kategori,tanggal,mulai,berakhir,tempat,harga,benefit) VALUES('','$nama','$desc','$gambar','$kategori','$tanggal','$mulai','$berakhir','$tempat','$harga','$benefit')";
        $query = mysqli_query($conn,$sql);
        if($query){
            echo '<script type="text/javascript">';
            echo ' alert("Data berhasil diinput!")';
            echo '</script>';
            header('Location: home.php');
        }else{
            echo '<script type="text/javascript">';
            echo ' alert("Data gagal diinput!")';
            echo '</script>';
            header('Location: create.php');
        }	
	
}
 }
?>