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
	<title>Detail Data Penyakit</title>
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
			                <h3>Detail Data Penyakit</h3>
			            </div>
			            <div class="col-6 text-right">
			            	<a href="penyakit_tb.php"><button class="btn btn-success"><i class="fa-solid fa-circle-arrow-left"></i> <span>Kembali ke halaman data penyakit</span></button></a>
			            </div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-12">
							<?php 
								//include config.php
								include '../config.php';

								//menerima data kd_penyakit yang dikirim dari url (read_tb_penyakit.php)
								$kd_penyakit	= @$_GET['kd_penyakit'];

								//query edit data dari tb_penyakit (berdasarkan kd_penyakit)
								$query	= "SELECT * FROM tb_penyakit WHERE kd_penyakit='$kd_penyakit' ";

								//eksekusi query edit data
								$hasil	= mysqli_query($config, $query);

								//menyimpan data yang sudah di eksekusi dalam bentuk array assosiatif
								$data 	= mysqli_fetch_array($hasil);
							?>

							<form method="post" action="update_act_tb_penyakit.php" name='form-edit-data-penyakit'>
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

								<!-- Jenis Gejala (multiselect)-->
									 <!-- jQuery -->
									 <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script> -->
									 <!-- Bootstrap JavaScript -->
									 <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script> -->
									 <!-- <script src="multiselect/js/jquery.multi-select.js"></script> -->
									 <!-- <script type="text/javascript">
									 // run pre selected options
									 $('#pre-selected-options').multiSelect();
									 </script> -->

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