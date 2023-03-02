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

	<!-- jQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>

	<!-- CSS Link -->
	<link rel="stylesheet" type="text/css" href="detail_tb_penyakit_gejala.css">


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detail Data Aturan (Rule)</title>
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

    	<!-- Detail Penyakit dan Gejala -->
    	<div class="container-fluid">
    	<div class="col-md-12">
    		<div class="card">
    			<div class="card-body">
    				<div class="row">
    					<div class="col-6">
			                <h3>Detail Data Aturan (Rule)</h3>
			            </div>
			            <div class="col-6 text-right">
			            	<a href="aturan_tb.php"><button class="btn btn-success"><i class="fa-solid fa-circle-arrow-left"></i> <span>Kembali ke halaman data aturan (rule)</span></button></a>
			            </div>	
    				</div>
    				<hr>
    				<div class="row">
    					<div class="col-md-12">
    						<?php 
								//include config.php
								include '../config.php';

								//menerima data kd_p_g yang dikirim dari url (read_tb_penyakit_gejala.php)
								$kd_p_g	= @$_GET['kd_p_g'];

								//query detail data dari tb_penyakit_gejala (berdasarkan kd_p_g)
								$query	= "SELECT * FROM tb_penyakit_gejala INNER JOIN tb_penyakit ON tb_penyakit_gejala.kd_penyakit = tb_penyakit.kd_penyakit
									INNER JOIN tb_gejala ON tb_penyakit_gejala.kd_gejala = tb_gejala.kd_gejala WHERE kd_p_g='$kd_p_g' ";

								//eksekusi query edit data
								$hasil	= mysqli_query($config, $query);

								//menyimpan data yang sudah di eksekusi dalam bentuk array assosiatif
								$data 	= mysqli_fetch_array($hasil);
							?>
    						<form method="post" action=" " name='aturan-detail'>
    							<!-- Kode Penyakit dan Gejala -->
								<td><input type="hidden" name="kd_p_g" class="form-control" required></td>

								<!-- Nama Penyakit -->
    							<div class="form-group row">
									<label for="namapenyakit" class="col-4 col-form-label">Nama Penyakit*</label> 
	                                <div class="col-8">
	                                <input id="nama_penyakit" name="nama_penyakit" placeholder="Nama Penyakit" class="form-control here" required="required" value="<?php echo $data['nama_penyakit']?>" type="text" disabled>
	                                </div>
								</div>

								<!-- Jenis Gejala -->
								<div class="form-group row">
									<label for="jnsgejala" class="col-4 col-form-label">Jenis Gejala*</label> 
	                                <div class="col-8">
	                                <input id="jns_gejala" name="jns_gejala" placeholder="Jenis Gejala" class="form-control here" required="required" value="<?php echo $data['jns_gejala']?>" type="text" disabled>
	                                </div>
								</div>

								<!-- Densitas (man)-->
								<div class="form-group row">
									<label for="n_densitas" class="col-4 col-form-label">Nilai Densitas*</label> 
	                                <div class="col-8">
	                                <input id="n_densitas" name="n_densitas" placeholder="Nilai Densitas Gejala" class="form-control here" required="required" value="<?php echo $data['n_densitas']?>" type="text" disabled>
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
	</div>
</body>
</html>
<?php
}
else
{
	?>
	<script language="JavaScript">
	alert('Anda belum login');
	document.location='../main/login_admin.php'
	</script>
	<?php
}
?>