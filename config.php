<?php 
class database{
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "mhs_unej";
	var $koneksi;

	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
	}


	function register($username,$password,$nama, $nim, $prodi, $fakultas, $email)
	{	
		$insert = mysqli_query($this->koneksi,"insert into pengguna values ('','$username','$password','$nama', '$nim', '$prodi', '$fakultas', '$email')");
		return $insert;
	}

	function login($username,$password,$remember)
	{
		$query = mysqli_query($this->koneksi,"select * from pengguna where username='$username'");
		$data_pengguna = $query->fetch_array();
		if(password_verify($password,$data_pengguna['password']))
		{
			
			if($remember)
			{
				setcookie('username', $username, time() + (60 * 60 * 24 * 5), '/');
				setcookie('nama', $data_pengguna['nama'], time() + (60 * 60 * 24 * 5), '/');
			}
			$_SESSION['username'] = $username;
			$_SESSION['nama'] = $data_pengguna['nama'];
			$_SESSION['nim'] = $data_pengguna['nim'];
			$_SESSION['prodi'] = $data_pengguna['prodi'];
			$_SESSION['fakultas'] = $data_pengguna['fakultas'];
			$_SESSION['email'] = $data_pengguna['email'];
			$_SESSION['is_login'] = TRUE;
			return TRUE;
		}
	}

	function relogin($username)
	{
		$query = mysqli_query($this->koneksi,"select * from pengguna where username='$username'");
		$data_pengguna = $query->fetch_array();
		$_SESSION['username'] = $username;
		$_SESSION['nama'] = $data_pengguna['nama'];
		$_SESSION['is_login'] = TRUE;
	}
} 


?>