<?php
session_start();

if ($_SESSION['status']=="login") 
{

?>
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
	<title>Detail Data Diagnosa</title>
</head>

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

<body>
	<div class="main-bg">
	<!-- Navbar -->
		<nav class="navbar navbar-expand-md  navbar-dark bg-dark">
			<!-- Logo -->
        	<a class="navbar-brand" href="main_admin.php">HealthyChicks</a>

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
	                <li class="nav-item dropdown">
		                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
		                    <?php echo $_SESSION['nama_admin']; ?>
		                </a>
		                <div class="dropdown-menu">
		                    <a class="dropdown-item" href="adm_profile_read.php">Lihat Profil</a>
		                    <a class="dropdown-item" href="logout_admin.php">Logout</a>
		                </div>
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
			                <h3>Detail Data Diagnosa</h3>
			            </div>
			            <div class="col-6 text-right">
			            	<a href="diagnosa_tb.php"><button class="btn btn-success"><i class="fa-solid fa-circle-arrow-left"></i> <span>Kembali ke halaman data diagnosa</span></button></a>
			            </div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-12">
							<?php 
								//include config.php
								include '../config.php';
								$kd_diagnosa	= @$_GET['kd_diagnosa'];
								$query	= "SELECT * FROM tb_diagnosa WHERE kd_diagnosa='$kd_diagnosa' ";
								$hasil	= mysqli_query($config, $query);
								$data 	= mysqli_fetch_array($hasil);
							?>

							<form method="post" action=" " name='diagnosa-detail'>
								<!-- Kode Diagnosa -->
								<td><input type="hidden" name="kd_diagnosa" value="<?php echo $data['kd_diagnosa']?>" class="form-control" required></td>

								<!-- Daftar Gejala -->
								<div class="form-group row">
	                                <label for="dftr_gejala" class="col-4 col-form-label">Daftar Gejala</label>
	                                <div class="col-8">
	                                <textarea id="dftr_gejala" name="dftr_gejala" placeholder="Daftar Gejala" cols="60" rows="6" class="form-control" disabled><?php echo $data['dftr_gejala']?></textarea>
	                                </div>
	                            </div>

								<!-- Diagnosa Penyakit -->
								<div class="form-group row">
									<label for="diag_penyakit" class="col-4 col-form-label">Diagnosa Penyakit</label>
	                                <div class="col-8">
	                                <input id="diag_penyakit" name="diag_penyakit" placeholder="Diagnosa Penyakit" class="form-control here" required="required" value="<?php echo $data['diag_penyakit']?>" type="text" disabled>
	                                </div>
								</div>

	                            <!-- Nilai -->
								<div class="form-group row">
									<label for="nilai" class="col-4 col-form-label">Nilai</label>
	                                <div class="col-8">
	                                <input id="nilai" name="nilai" placeholder="Nilai" class="form-control here" required="required" value="<?php echo $data['nilai']?>" type="text" disabled>
	                                </div>
								</div>

								<!-- Persentase -->
								<div class="form-group row">
									<label for="persentase" class="col-4 col-form-label">Persentase</label>
	                                <div class="col-8">
	                                <input id="persentase" name="persentase" placeholder="Persentase" class="form-control here" required="required" value="<?php echo $data['persentase']?>" type="text" disabled>
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
<?php
}
else
{
	?>
	<script language="JavaScript">
	alert('Anda belum login');
	document.location='login_admin.php'
	</script>
	<?php
}
?>