<?php

if(isset($_GET['id'])){
	
	
	include('koneksi.php');
	
	
	$id = $_GET['id'];
	
	
	$cek = mysqli_query($koneksi,"SELECT idproduk FROM produk WHERE idproduk='$id'") or die(mysqli_error());
	
	
	if(mysqli_num_rows($cek) == 0){
		
		
		echo '<script>window.history.back()</script>';
	
	}else{
		
		
		$del = mysqli_query($koneksi,"DELETE FROM produk WHERE idproduk='$id'");
		
		
		if($del){
			
			echo 'Data berhasil di hapus! ';		
			echo '<a href="daftar_produk.php">Kembali</a>';	
			
		}else{
			
			echo 'Gagal menghapus data! ';		
			echo '<a href="daftar_produk.php">Kembali</a>';	
		
		}
		
	}
	
}else{
	
	
	echo '<script>window.history.back()</script>';
	
}
?>