<?php

if (!session_id()) session_start();
if (!$_SESSION['logon']){ 
    header("Location:index.php");
    die();
}

require_once('lib/DBClass.php');
require_once('lib/m_produk.php');

$siswa = new Produk();
$data = $siswa->readAllBrand();
$data = $siswa->readAllKategori();

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Admin Theme v3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <link href="css/stats.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="dashboard.php">Bootstrap Admin Theme</a></h1>
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
	                          <li><a href="logout.php">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li><a href="dashboard.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li><a href="tambah_produk.php"><i class="glyphicon glyphicon-calendar"></i> Tambah Produk</a></li>
                    <li class="current"><a href="daftar_produk.php"><i class="glyphicon glyphicon-stats"></i> Daftar Produk</a></li>
                    <li><a href="feedback.php"><i class="glyphicon glyphicon-list"></i> Feedback</a></li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">

		  	<div class="row">
  				
  					<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title">Daftar Produk</div>
							
							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
								<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
							</div>
						</div>
		  				<div class="panel-body">
		  					<table class="table table-striped">
				              <thead>
				                <tr>
				                  <th>ID Produk</th>
				                  <th>ID Brand</th>
				                  <th>ID Kategori</th>
				                  <th>Name</th>
				                  <th>Harga</th>
				                  <th>Deskripsi</th>
				                  <th>Opsi</th>
				                </tr>
				              </thead>
				              <tbody>
				                <?php
									include('koneksi.php');	

									$query = mysqli_query($koneksi, "SELECT * FROM produk JOIN brand on produk.idbrand = brand.idbrand JOIN kategori on produk.idKategori = kategori.idKategori ORDER BY idproduk ASC") or die(mysqli_error());

									if (mysqli_num_rows($query) == 0) { 
										echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
									} else {
										
										while ( $data = mysqli_fetch_assoc($query)) {
											echo "<tr>";
											echo "<td>".$data['IdProduk']."</td>";
											echo "<td>".$data['NamaBrand']."</td>";
											echo "<td>".$data['NamaKategori']."</td>";
											echo "<td>".$data['NamaProduk']."</td>";
											echo "<td>".$data['Harga']."</td>";
											echo "<td>".$data['Deskripsi']."</td>";
											echo '<td><a href="edit_produk.php?id='.$data['IdProduk'].'">Edit</a> / <a href="hapus.php?id='.$data['IdProduk'].'" onclick="return confirm(\'Apakah anda yakin ingin menghapus data?\')">Hapus</a></td>';
											echo '</tr>';

											

									}
								}
								mysqli_close($koneksi);
								?>
				              
				            </table>
		  				</div>
		  			</div>
  				
  			</div>
		</div>
    </div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2014 <a href='#'>Website</a>
            </div>
            
         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="vendors/morris/morris.css">


    <script src="vendors/jquery.knob.js"></script>
    <script src="vendors/raphael-min.js"></script>
    <script src="vendors/morris/morris.min.js"></script>

    <script src="vendors/flot/jquery.flot.js"></script>
    <script src="vendors/flot/jquery.flot.categories.js"></script>
    <script src="vendors/flot/jquery.flot.pie.js"></script>
    <script src="vendors/flot/jquery.flot.time.js"></script>
    <script src="vendors/flot/jquery.flot.stack.js"></script>
    <script src="vendors/flot/jquery.flot.resize.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/stats.js"></script>
  </body>
</html>