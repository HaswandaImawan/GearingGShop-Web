<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php require_once("koneksi.php");
    if (!isset($_SESSION)) {
        session_start();
} ?>
<!DOCTYPE HTML>
<html>
<head profile="http://www.w3.org/2005/10/profile">
<link rel="icon" 
      type="image/png" 
      href="images/controller-icon-8.png">
<title>Gearing GShop : Products</title>

<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/lightbox.css">

<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800|Titillium+Web:400,600,700,300' rel='stylesheet' type='text/css'>
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Game Spot Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

  
</head>
<body>
<!-- header -->
<div class="banner banner2">
	 <div class="container">
		 <div class="headr-right">
				<div class="details">
					<ul>
						<li><a href="mailto:@example.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>gearinggs@gmail.com</a></li>
						<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>(+62)852 9932 8412</li>
					</ul>
			  </div>
		 </div>
		 <div class="banner_head_top">
			  <div class="logo">
					 <h1><a href="index.html">Gearing<span class="glyphicon glyphicon-send" aria-hidden="true"></span><span>GShop</span></a></h1>
			 </div>	
			 <div class="top-menu">	 
			     <div class="content white">
					 <nav class="navbar navbar-default">
						 <div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>				
						 </div>
						 <!--/navbar header-->		
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							 <ul class="nav navbar-nav">
								 <li><a href="index.html">Home</a></li>
								 <li><a href="products.php">Product</a></li>
								 <li class="dropdown">
									<a href="#" class="scroll dropdown-toggle" data-toggle="dropdown">Categories<b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="mouse.php">Mouse</a></li>
										<li><a href="keyboard.php">Keyboard</a></li>
										<li><a href="headset.php">Headset</a></li>
										<li><a href="controller.php">Gamepad</a></li>
									</ul>
								 </li>
								 <li><a href="contact.html">Contact</a></li>
							 </ul>
							</div>
						  <!--/navbar collapse-->
					 </nav>
					  <!--/navbar-->
				 </div>
					 <div class="clearfix"></div>
					<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
			  </div>
				 <div class="clearfix"></div>
		  </div>
	 </div>	 
</div>
<!---->
<div class="about"> 
		<div class="container">
			<div class="abt-btm-grids">
			<?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM produk WHERE idkategori=1 ORDER BY idproduk DESC");
					if(mysqli_num_rows($sql) == 0){
					echo "Tidak ada produk!";
					}else{
					while($data = mysqli_fetch_assoc($sql)){
       		?>
			 <div class="col-md-3 abt-sec span_1_of_4">
			 	<div class="bagi"> 
				 <div class="num-heading">

					   <div class="number">
							<img src="images/<?php echo $data['Foto']; ?>" class="img-responsive">
					   </div>
					  <div class="heading">								
						  <h4><?php echo $data['NamaProduk']; ?></h4>
					  </div>
					  <div class="clearfix"></div>
				 </div> 
				 <div class="heading-desc">	
					 <p>Rp.<?php echo number_format($data['Harga'],2,",",".");?></p>
				 </div>	
				</div>
				<div class="bagi2"></div>
			 </div>
			 		 
			 		 <?php   
              }
              }
              
              ?>

		 	</div>	
		 	<br>		
		</div>
</div>

<!-- footer -->
<div class="footer">
	 <div class="container">
		 <div class="footer-grids">
			 <div class="col-md-6 news-ltr">
				 <h4>Newsletter</h4>
				 <p>Berlangganan Artikel terbaru website kami secara mudah melalui e-mail? silahkan daftarkan e-mail anda secara gratis.</p>
				 <form>					 
					  <input type="text" class="text" value="Enter Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Email';}">
					 <input type="submit" value="Subscribe">
					 <div class="clearfix"></div>
				 </form>			 
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h3>Categories</h3>
				 <ul class="ftr-list">
					 <li><a href="#">Controller</a></li>
					 <li><a href="#">Headset</a></li>
					 <li><a href="#">Keyboard</a></li>
					 <li><a href="#">Mouse</a></li>
					 <li><a href="#">Mousepad</a></li>
				 </ul>							 
			 </div>	
			 <div class="col-md-3 ftr-grid">
				 <h3>Brands</h3>
				 <ul class="ftr-list">
					 <li><a href="http://www.logitech.com/id-id"><img src="images/logo1.png"></a></li>
					 <li><a href="https://steelseries.com/"><img src="images/logo2.png"></a></li>
					 <li><a href="http://www.razerzone.com/"><img src="images/logo3.png"></a></li>					 
				 </ul>				 
			 </div>			 	
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="copywrite">
	 <div class="container">
		 <p> © 2016 Gearing GShop . All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
	 </div>
</div>
<!---->

</body>
</html>