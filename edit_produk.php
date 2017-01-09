<?php

require_once('lib/DBClass.php');
require_once('lib/m_produk.php');

if(!isset($_POST['kirim'])){
	exit('Access Forbiden');
}

$produk = new Produk();

$data['input_IdBrand'] = addslashes($_POST['in_IdBrand']);
$data['input_IdKategori'] = $_POST['in_IdKategori'];
$data['input_NamaProduk'] = $_POST['in_NamaProduk'];
$data['input_Harga'] = $_POST['in_Harga'];
$data['input_Deskripsi'] = $_POST['in_Deskripsi'];

// Pengecekan file $foto
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["in_Foto"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["in_Foto"]["tmp_name"]);
		if($check !== false) {
			echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		} else {
			echo "File is not an image.";
			$uploadOk = 0;
		}
	}
	// Check if file already exists
	if (file_exists($target_file)) {
		echo "Sorry, file already exists.";
		$uploadOk = 0;
	}
	// Check file size
	if ($_FILES["in_Foto"]["size"] > 2000000) {
		echo "Sorry, your file is too large.";
		$uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
    if (move_uploaded_file($_FILES["in_Foto"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["in_Foto"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
		}
	}
	
$data['input_foto'] = $target_file;
$produk->updateProduk($_POST['in_IdProduk'], $data);

echo "Data siswa Berhasil di update bro<br />";

?>