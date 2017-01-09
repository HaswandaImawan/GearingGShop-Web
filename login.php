<?php 
session_start();
include "koneksi.php";
	$user=$_POST['username'];
	$password=$_POST['password'];
	$query=mysqli_query($koneksi, "SELECT * FROM `admin`  where username='$user' and password='$password'");
	$cek=mysqli_fetch_assoc($query);
	
	if($cek){
		$_SESSION['username']=$user;
		$_SESSION['password']=$password;
		$_SESSION['logon']= true;
		header("location:dashboard.php");
		?>
		<?php
	}else{
		?>Username atau Password belum terdaftar <a href="index.php"><br>Login kembali<br></a><?php
		mysqli_close($koneksi);
}
?>  