<?php

if(isset($_POST['simpan'])){
	
	
	include('koneksi.php');
	
	$id = $_POST['id']; 
	
	$IdBrand	= $_POST['IdBrand'];
	$IdKategori = $_POST['IdKategori'];
	$NamaProduk	= $_POST['NamaProduk'];
	$Harga 		= $_POST['Harga'];
	$Deskripsi 	= $_POST['Deskripsi'];
	$Foto		= $_POST['Foto'];
	
	
	$update = mysqli_query($koneksi,"UPDATE produk SET IdBrand='$IdBrand', IdKategori='$IdKategori', NamaProduk='$NamaProduk', Harga='$Harga', Deskripsi='$Deskripsi', Foto='$Foto' WHERE IdProduk='$id'") or die(mysqli_error());
	
	
	if($update){
		
		echo 'Data berhasil di simpan! ';		
		echo '<a href="daftar_produk.php?id='.$id.'">Kembali</a>';	
		
	}else{
		
		echo 'Gagal menyimpan data! ';		
		echo '<a href="daftra_produk.php?id='.$id.'">Kembali</a>';	
		
	}

}else{	

	
	echo '<script>window.history.back()</script>';

}
?>