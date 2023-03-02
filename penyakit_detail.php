<!DOCTYPE html>
<html>
<head>
	<!-- Bootstrap 4.4.1 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<!-- Fontawesome -->
	<script src="https://kit.fontawesome.com/0e98341837.js" crossorigin="anonymous"></script>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style type="text/css">
	html,body{height: 100%;}
	.main-bg{
	  background-color: whitesmoke;
	  background-size: cover;
	  background-position: center;
	  height: 100%;
	  width: 100%;
	  display: table;
	  vertical-align: middle;
	}

	.navbar-brand{
	  font-size: 30px;
	}

	.container-fluid{
	  padding-top: 20px;
	  padding-bottom: 20px;
	}

	.page-footer{
	  background-color: darkgray;
	  bottom:0;
	  left: 0;
	  width: 100%;  
	}
	p,a{color: white;}
	</style>

	<title>Detail Data Penyakit</title>
</head>

<body>
	<div class="main-bg">
	<!-- Navbar -->
		<nav class="navbar navbar-expand-md  navbar-light bg-light">
			<!-- Logo -->
        	<a class="navbar-brand" href="index.php">HealthyChicks</a>

        	<!-- Toggler/pembuka menu kalo dibuka lewat hape -->
        	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
           		<span class="navbar-toggler-icon"></span>
        	</button>

        	<!-- Navbar collapse (bisa disembunyiin pas dibuka di hape) -->
	        <div class="collapse navbar-collapse" id="navbarNav">
	        	<!-- Search -->
	            <ul class="navbar-nav mr-auto">
	                <form class="form-inline my-2 my-lg-0">
				    	<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				    	<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				    </form>
	            </ul>

	            <!-- Login and Register -->
	            <ul class="navbar-nav">
	                <li class="nav-item">
	                    <a class="nav-link" href="main/login_member.php">Login</a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-link" href="main/regis_member.php">Register</a>
	                </li>
	            </ul>
	        </div>
	    </nav>
    	<!-- End navbar -->

    	<!-- Detail Penyakit -->
    	<div class="container-fluid">
    	<div class="col-md-12">
    		<div class="card">
    			<div class="card-body">
    				<div class="row">
						<div class="col-6">
			                <h3>Detail Data Penyakit</h3>
			            </div>
			            <div class="col-6 text-right">
			            	<a href="penyakit.php"><button class="btn btn-success"><i class="fa-solid fa-circle-arrow-left"></i> <span>Kembali ke halaman daftar penyakit</span></button></a>
			            </div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-12">
							<?php 
								include 'config.php';

								$kd_penyakit	= @$_GET['kd_penyakit'];
								$sql			= "SELECT * FROM tb_penyakit WHERE kd_penyakit='$kd_penyakit' ";
								$hasil			= mysqli_query($config, $sql);
								$data 			= mysqli_fetch_array($hasil);
							?>

							<form method="post" action=" " name='page_penyakit_detail'>
								<!-- Kode Penyakit -->
								<td><input type="hidden" name="kd_penyakit" value="<?php echo $data['kd_penyakit']?>" class="form-control" required></td>

								<!-- Nama Penyakit -->
								<div class="form-group row">
									<label for="namapenyakit" class="col-4 col-form-label">Nama Penyakit*</label> 
	                                <div class="col-8">
	                                <input id="nama_penyakit" name="nama_penyakit" placeholder="Nama Penyakit" class="form-control here" required="required" value="<?php echo $data['nama_penyakit']?>" type="text" disabled>
	                                </div>
								</div>

								<!-- Deskripsi Penyakit -->
								<div class="form-group row">
	                                <label for="desc_penyakit" class="col-4 col-form-label">Deskripsi Penyakit</label>
	                                <div class="col-8">
	                                <textarea id="desc_penyakit" name="desc_penyakit" placeholder="Deskripsi Penyakit" cols="60" rows="6" class="form-control" disabled><?php echo $data['desc_penyakit']?></textarea>
	                                </div>
	                            </div>

	                            <!-- Solusi Penyakit -->
								<div class="form-group row">
	                                <label for="solusi" class="col-4 col-form-label">Solusi Penyakit</label>
	                                <div class="col-8">
	                                <textarea id="solusi" name="solusi" placeholder="Solusi Penyakit" cols="60" rows="6" class="form-control" disabled><?php echo $data['solusi']?></textarea>
	                                </div>
	                            </div>

							</form>
						</div>
					</div>
    			</div>
    		</div>
    	</div>	
    	</div>

    	<!-- Footer -->
		<div class="page-footer font-small blue">
			<div class="footer-copyright text-center py-3">
				<p>© 2020 Copyright <a href="/"> MDBootstrap.com</a></p>
			</div>
		</div>
		<!-- /Footer -->
</body>
</html>