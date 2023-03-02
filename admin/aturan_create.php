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
	<title>Tambah Data Aturan (Rule)</title>
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

    	<!-- Create Data Penyakit dan Gejala -->
    	<div class="container-fluid">
    	<div class="col-md-12">
    		<div class="card">
    			<div class="card-body">
    				<div class="row">
						<div class="col-6">
			                <h3>Tambah Data Aturan (Rule)</h3>
			            </div>
			            <div class="col-6 text-right">
			            	<a href="aturan_tb.php"><button class="btn btn-success"><i class="fa-solid fa-circle-arrow-left"></i> <span>Kembali ke halaman data aturan (rule)</span></button></a>
			            </div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-12">
							<form method="post" action=" " name='form-input-data-penyakit-gejala'>
								<!-- Kode Penyakit dan Gejala -->
								<td><input type="hidden" name="kd_p_g" class="form-control" required></td>

								<!-- Nama Penyakit (multiselect)-->
    							<div class="form-group row">
									<label for="nama_penyakit" class="col-4 col-form-label">Nama Penyakit*</label> 
	                                <div class="col-8">
	                                <select class="custom-select" name="kd_penyakit" id="kd_penyakit" required>
	                                	<option disabled selected>-- Pilih Nama Penyakit --</option>
	                                	<?php
										//Membuat koneksi ke database akademik
										include '../config.php';
											
										//Perintah sql untuk menampilkan semua data pada tabel jurusan
										$sql = "SELECT * FROM tb_penyakit";

										$hasil=mysqli_query($config,$sql);
										$no=1;
										while ($data = mysqli_fetch_array($hasil)) {
										$no++;
										?>
											<option value="<?php echo $data['kd_penyakit'];?>"> <?php echo $data['nama_penyakit'];?></option>
										<?php 
										}
										?>
	                                </select>
	                                </div>
								</div>

								<!-- Jenis Gejala (multiselect)-->
								<div class="form-group row">
									<label for="jns_gejala" class="col-4 col-form-label">Gejala*</label>
	                                <div class="col-8">
	                                <select class="custom-select" id='pre-selected-options' name="kd_gejala" required>
									    <option disabled selected>-- Pilih Jenis Gejala --</option>
	                                	<?php
										//Membuat koneksi ke database akademik
										include '../config.php';
											
										//Perintah sql untuk menampilkan semua data pada tabel jurusan
										$sql = "SELECT * FROM tb_gejala";

										$hasil=mysqli_query($config,$sql);
										$no=1;
										while ($data = mysqli_fetch_array($hasil)) {
										$no++;
										?>
											<option value="<?php echo $data['kd_gejala'];?>"> <?php echo $data['jns_gejala'];?></option>
										<?php 
										}
										?>
									 </select>
	                                </div>
								</div>

								<!-- Densitas -->
								<div class="form-group row">
									<label for="n_densitas" class="col-4 col-form-label">Nilai Densitas*</label> 
	                                <div class="col-8">
	                                <input id="n_densitas" name="n_densitas" placeholder="Nilai Densitas Gejala" class="form-control here" required="required" type="text">
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
			//menerima input dari form di create_tb_penyakit_gejala.php
			$kd_p_g			= @$_POST["kd_p_g"];
			$kd_penyakit	= @$_POST["kd_penyakit"];
			$kd_gejala		= @$_POST["kd_gejala"];
			$n_densitas		= @$_POST["n_densitas"];

			// foreach($kd_gejala as $kd_gejala1)
			// {
				//query input data ke dalam tabel tb_penyakit_gejala
				$query	= "INSERT INTO tb_penyakit_gejala (kd_p_g, kd_penyakit, kd_gejala, n_densitas) VALUES ('$kd_p_g','$kd_penyakit','$kd_gejala','$n_densitas')";

				//eksekusi query input data
				$hasil	= mysqli_query($config, $query);
			// }

			//kondisi apakah berhasil atau tidak
			if ($hasil) {
				?>
				<script language="JavaScript">
				alert('Data baru berhasil ditambah');
				document.location='aturan_tb.php'
				</script>
				<?php
			}else{
				echo "Gagal input data";
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