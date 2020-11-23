<?php 
class database {
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "wad_modul4";
    var $conn;

    function __construct(){
        $this->conn = mysqli_connect($this->host,$this->username,$this->password,$this->database);
    }

    function register($nama,$email,$nohp,$pass){
        $regist = mysqli_query($this->conn,"insert into user value ('','$nama','$email','$nohp','$pass')");
		return $regist;
    }

    function login($email,$pass,$remember)
	{
		$query = mysqli_query($this->conn,"select * from user where email ='$email'");
        $data_user = $query->fetch_array();
        if($data_user != null){
		if($pass == $data_user['password'])
		{
			
			if($remember)
			{
                setcookie('id', $data_user['id'], time() + (60 * 60 * 24 * 5), '/');
				setcookie('email', $email, time() + (60 * 60 * 24 * 5), '/');
                setcookie('nama', $data_user['nama'], time() + (60 * 60 * 24 * 5), '/');
                if(!isset($_COOKIE['navbar'])){
                    setcookie('navbar', "bg-light", time() + (60 * 60 * 24 * 5), '/');
                }
            }

            $_SESSION['id'] = $data_user['id'];
			$_SESSION['email'] = $email;
			$_SESSION['nama'] = $data_user['nama'];
            $_SESSION['sudah_login'] = TRUE;
            if(!isset($_COOKIE['navbar'])){
            setcookie('navbar', "bg-light", time() + (60 * 60 * 24 * 5), '/');
        }
            return TRUE;
            
        }else{
            echo '<div class="alert alert-warning" role="alert">
            Login gagal ! </div>'; 
        }
    }else{
        echo '<div class="alert alert-warning" role="alert">
            Email tidak ditemukan ! </div>'; 
    }
    }
    
	public function relogin($email)
	{
		$query = mysqli_query($this->conn,"select * from user where email='$email'");
        $user = $query->fetch_array();
        $_SESSION['id'] = $user['id'];
		$_SESSION['email'] = $email;
		$_SESSION['nama'] = $user['nama'];
		$_SESSION['sudah_login'] = TRUE;
	}
    public function update($nama,$nohp,$pass,$id){
            $update = mysqli_query($this->conn,"UPDATE user SET nama='$nama', no_hp='$nohp', password='$pass' WHERE id=='$id'");
        return $update; 
    }
    public function tampiluser($id){
        $tampil = mysqli_query($this->conn,"select * from user where id='$id'");
        $read = mysqli_fetch_array($tampil);
        return $read;  
    }

    public function tambahbarang($id,$nama,$harga){
        $query = mysqli_query($this->conn,"INSERT INTO cart values ('','$id','$nama','$harga')");
        return $query;        
    }
    public function hapusbarang($idbrg){
        $hapus = mysqli_query($this->conn,"DELETE FROM cart where id='$idbrg'");
        return $hapus;  
    }
    public function tampilbarang($id){
        $tampil = mysqli_query($this->conn,"select * from cart where user_id='$id'");
        return $tampil;  
    }

}
?>