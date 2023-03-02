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
	<title>Halaman Pilihan Gejala</title>
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

	.col-md-12{
	  padding-top: 20px;
	  padding-bottom: 20px;
	}

	.gejala_checkbox{
	  -webkit-transform: scale(1.3);
	  font-size-adjust: 20px;
	}

	.page-footer{
	  background-color: darkgray;
	}
	p,a{color: white;}
</style>

<body>
	<div class="main-bg">
		<!-- Navbar -->
		<nav class="navbar navbar-expand-md navbar-light bg-light">
			<!-- Logo -->
        	<a class="navbar-brand" href="page_main.php">HealthyChicks</a>

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
		                     <?php echo $_SESSION['nama_member']; ?>
		                </a>
		                <div class="dropdown-menu">
		                    <a class="dropdown-item" href="profile_read.php">Lihat Profil</a>
		                    <a class="dropdown-item" href="logout_member.php">Logout</a>
		                </div>
		            </li>
	            </ul>
	        </div>
	    </nav>
    	<!-- End navbar -->

    	<!-- Pilihan Daftar Gejala -->
    	<div class="container-fluid">
    	<div class="col-md-12">
    		<div class="card">
    			<div class="card-body">
    				<div class="row">
    					<div class="col-6">
		                    <h3>Daftar Pilihan Gejala</h3>
		                </div>
    				</div>

    				<hr>

    				<div class="row">
    					<div class="container-fluid">
    						<h5>Silakan centang gejala yang terlihat atau nampak pada ayam broiler</h5>

    						<table class="table table-bordered table-hover">
    						<thead class="thead-dark">
    							<tr>
							    	<th scope="col" style="width: 100%;">Jenis Gejala</th>
							    </tr>
    						</thead>
    						

							<form method="post" action="diagnosa_hasil.php">
    							<?php
    							//Membuat koneksi ke database akademik
								include '../config.php';

								//Perintah sql untuk menampilkan semua data pada tabel jurusan
								$sql = "SELECT * FROM tb_gejala";

								$hasil=$config->query($sql);
								$no=1;
								while ($row=$hasil->fetch_object()) 
								{
								$no++;

								?><tbody>
									<tr>
										<td><?php echo "<input type='checkbox' name='gejala[]' value='{$row->kd_gejala}'> {$row->jns_gejala}<br>";?>
										</td>
									</tr>
									</tbody>
								<?php
								}
    							?>
    							</table>
    							<br>
    							<!-- Submit -->
	                            <div class="form-group row">
	                                <div class="col-12">
	                                	<a><button class="btn btn-success" type="submit" name="simpan" value="Simpan" onclick="return confirm('Yakin mau menginput data ini?')">Simpan data</button></a>
	                               		<!-- <input type="submit" name="simpan" value="Simpan" onclick="return confirm('Yakin mau menginput data ini?')"> -->

	                               		<a href=""><button class="btn btn-secondary" type="reset" name="reset" value="Reset">Reset</button></a>
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
		<footer class="page-footer font-small blue">

			<!-- Copyright -->
			<div class="footer-copyright text-center py-3">
				<p>© 2020 Copyright <a href="/"> MDBootstrap.com</a></p>
			</div>
			<!-- Copyright -->

		</footer>
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
	document.location='login_member.php'
	</script>
	<?php
}
?>