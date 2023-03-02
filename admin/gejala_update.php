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
	<title>Edit Data Gejala</title>
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

    	<!-- Update Gejala -->
    	<div class="container-fluid">
    	<div class="col-md-12">
    		<div class="card">
    			<div class="card-body">
    				<div class="row">
						<div class="col-6">
			                <h3>Edit Data Gejala</h3>
			            </div>
			            <div class="col-6 text-right">
			            	<a href="gejala_tb.php"><button class="btn btn-success"><i class="fa-solid fa-circle-arrow-left"></i> <span>Kembali ke halaman data gejala</span></button></a>
			            </div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-12">
							<?php 
								//include config.php
								include '../config.php';

								//menerima data kd_gejala yang dikirim dari url (read_tb_gejala.php)
								$kd_gejala	= @$_GET['kd_gejala'];

								//query edit data dari tb_gejala (berdasarkan kd_gejala)
								$query	= "SELECT * FROM tb_gejala WHERE kd_gejala='$kd_gejala' ";

								//eksekusi query edit data
								$hasil	= mysqli_query($config, $query);

								//menyimpan data yang sudah di eksekusi dalam bentuk array assosiatif
								$data 	= mysqli_fetch_array($hasil);
							?>

							<form method="post" action=" " name='gejala-update'>
								<!-- Kode Gejala -->
								<td><input type="hidden" name="kd_gejala" value="<?php echo $data['kd_gejala']?>" class="form-control" required></td>

								<!-- Jenis Gejala -->
								<div class="form-group row">
									<label for="jnsgejala" class="col-4 col-form-label">Jenis Gejala*</label> 
	                                <div class="col-8">
	                                <input id="jns_gejala" name="jns_gejala" placeholder="Jenis Gejala" class="form-control here" required="required" value="<?php echo $data['jns_gejala']?>" type="text">
	                                </div>
								</div>

								<!-- Submit -->
	                            <div class="form-group row">
	                                <div class="offset-4 col-8">
	                                	<a><button class="btn btn-success" type="submit" name="simpan" value="Simpan" onclick="return confirm('Yakin mau menginput data ini?')">Simpan data</button></a>
	                               		<!-- <input type="submit" name="simpan" value="Simpan" onclick="return confirm('Yakin mau menginput data ini?')"> -->

	                               		<a href=""><button class="btn btn-secondary" type="reset" name="reset" value="Reset">Reset</button></a>
										<!-- <input type="reset" name="reset" value="Reset"> -->
	                                </div>
	                            </div>
							</form>
						</div>
					</div>
    			</div>
    		</div>
    	</div>	
    	</div>

    	<!-- Form Action -->
    	<?php 
		//include config.php
		include '../config.php';


		if(isset($_POST['simpan']))
		{

			//menerima data kd_gejala yang dikirim dari url (read_tb_gejala.php)
			$kd_gejala		= @$_POST['kd_gejala'];
			$jns_gejala		= @$_POST['jns_gejala'];

			//query edit data dari tb_gejala (berdasarkan kd_gejala)
			$query	= "UPDATE tb_gejala SET
				kd_gejala			='$kd_gejala',
				jns_gejala			='$jns_gejala'
				WHERE kd_gejala		='$kd_gejala' ";

			//eksekusi query edit data
			$hasil	= mysqli_query($config, $query);

			//kondisi apakah berhasil atau tidak
			if ($hasil) {
				?>
				<script language="JavaScript">
				alert('Data berhasil di-edit');
				document.location='gejala_tb.php'
				</script>
				<?php
			}else{
				echo "Gagal edit data";
			exit;
			}
		}

		?>
    	<!-- /Form Action -->

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