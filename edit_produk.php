<?php
	include('koneksi.php');
	$id = $_GET['id'];
	$show = mysqli_query($koneksi,"SELECT * FROM produk WHERE idproduk='$id'");
	if (mysqli_num_rows($show) == 0) {
		echo "<script>window.history.back</script>";
	}else{
		$data = mysqli_fetch_assoc($show);
	}
	?>


<html>
  <head>
    <title>Bootstrap Admin Theme v3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendors/fullcalendar/fullcalendar.css" rel="stylesheet" media="screen">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <link href="css/calendar.css" rel="stylesheet">
	

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<!-- Header -->
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Bootstrap Admin Theme</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                       <input type="text" class="form-control" placeholder="Search...">
	                       <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Search</button>
	                       </span>
	                  </div>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="profile.html">Profile</a></li>
	                          <li><a href="login.html">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>
	<!-- HeaderEnd -->
	
    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li><a href="index.html"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li class="current"><a href="tambah_produk.php"><i class="glyphicon glyphicon-calendar"></i> Tambah Produk</a></li>
                    <li><a href="daftar_produk.php"><i class="glyphicon glyphicon-stats"></i> Daftar Produk</a></li>
                    <li><a href="feedback.php"><i class="glyphicon glyphicon-list"></i> Feedback</a></li>
                </ul>
             </div>
		  </div>
		  
		  <div class="col-md-10">
		  			<div class="content-box-large">
		  				<div class="panel-body">
		  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title">Edit Produk</div>
					            <div class="panel-options">
					              <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
					              <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
					            </div>
					        </div>
							
			  				<div class="panel-body">
			  					<form action="edit_proses.php" method="post">
									<fieldset>
									<input type="hidden" name="id" value="<?php echo $id; ?>">
									<table cellpadding="3" cellspacing="0"></table>
										<div class="form-group">
											<label>Brand</label><br />
											<select class="selectpicker" name ="IdBrand">
												<option value="1">SteelSeries</option>
												<option value="2">Razer</option>
												<option value="3">Logitech</option>
											</select>
										</div>
										
										<div class="form-group">									
											<label>Kategori</label><br />
											<select class="selectpicker" name ="IdKategori">
												<option value="1">Mouse</option>
												<option value="2">Keyboard</option>
												<option value="3">Headset</option>
												<option value="4">Joystick</option>
											</select>
										</div>
										
										<div class="form-group">
											<label>Nama Produk</label>
											<input class="form-control" value="<?php echo $data['NamaProduk']; ?>" required type="text" name="NamaProduk">
										</div>
										
										<div class="form-group">
											<label>Harga</label>
											<input class="form-control" value="<?php echo $data['Harga']; ?>" required type="text" name="Harga">
										</div>
										
										<div class="form-group">
											<label>Deskripsi</label>
											<textarea name="Deskripsi" class="form-control" value="<?php echo $data['Deskripsi']; ?>" required rows="3"></textarea>
										</div>
										
										<div class="form-group">
											<label class="col-md-2 control-label">Upload Gambar</label>
											<div class="col-md-10">
												<input type="file" class="btn btn-default" id="exampleInputFile1" name="Foto">
												<p class="help-block">
													Pilih gambar sesuai dengan produk yang diinput
												</p>
											</div>
										</div>
									</fieldset>
									<div>
										<input class="btn btn-primary" type="submit" name="simpan" value="simpan">
									</div>
								</form>
			  				</div>
							</div>
		  				</div>
		  			</div>


		  </div>
		</div>
    </div>
	
	<!-- Footer -->
    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2014 <a href='#'>Website</a>
            </div>
            
         </div>
      </footer>
	<!-- FooterEnd -->
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="vendors/fullcalendar/fullcalendar.js"></script>
    <script src="vendors/fullcalendar/gcal.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/calendar.js"></script>
  </body>
</html>