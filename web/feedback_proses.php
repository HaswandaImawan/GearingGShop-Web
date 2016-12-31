<?php
if (isset($_POST['submit'])) {
	include('koneksi.php');

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	$input = mysqli_query($koneksi, "INSERT INTO feedback VALUES(null,'$name','$email','$phone','$message')") or die(mysqli_error());
	if ($input) {
		echo "Pesan anda berhasil dikirim";
		echo "<a href='index.html'>Kembali</a>";

	} else {
		echo "Pesan anda Gagal dikirim!";
		echo "<a href='index.html'>Kembali</a>";
	}
} else {
	echo "<script>window.history.back()</script>";
}
?>