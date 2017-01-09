<?php 
session_start();
session_destroy();

echo "<script>alert('logout berhasil');</script>";	
echo "<script>window.location = 'index.php';</script>";

?>