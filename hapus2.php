<?php

if(isset($_GET['id'])){
	
	
	include('koneksi.php');
	
	
	$id = $_GET['id'];
	
	
	$cek = mysqli_query($koneksi,"SELECT idfeedback FROM feedback WHERE idfeedback='$id'") or die(mysqli_error());
	
	
	if(mysqli_num_rows($cek) == 0){
		
		
		echo '<script>window.history.back()</script>';
	
	}else{
		
		
		$del = mysqli_query($koneksi,"DELETE FROM feedback WHERE idfeedback='$id'");
		
		
		if($del){
			
			echo 'Data berhasil di hapus! ';		
			echo '<a href="feedback.php">Kembali</a>';	
			
		}else{
			
			echo 'Gagal menghapus data! ';		
			echo '<a href="feedback.php">Kembali</a>';	
		
		}
		
	}
	
}else{
	
	
	echo '<script>window.history.back()</script>';
	
}
?>