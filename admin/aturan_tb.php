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
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<!-- Fontawesome -->
	<script src="https://kit.fontawesome.com/0e98341837.js" crossorigin="anonymous"></script>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tabel Daftar Aturan</title>
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

	/*CUSTOM TABEL BIAR CAKEP*/
	.table {
	  border-collapse: separate !important;
	  border-spacing: 0 !important;
	}

	.table tr th,
	.table tr td {
	  border-right: 1px solid #dee2e6 !important;
	  border-bottom: 1px solid #dee2e6 !important;
	}
	.table tr th:first-child,
	.table tr td:first-child {
	  border-left: 1px solid #dee2e6 !important;
	}
	.table tr th {
	  border-top: 1px solid #dee2e6 !important;
	}

	/* top-left border-radius */
	.table tr:first-child th:first-child {
	  border-top-left-radius: 10px !important;
	}

	/* top-right border-radius */
	.table tr:first-child th:last-child {
	  border-top-right-radius: 10px !important;
	}

	/* bottom-left border-radius */
	.table tr:last-child td:first-child {
	  border-bottom-left-radius: 10px !important;
	}

	/* bottom-right border-radius */
	.table tr:last-child td:last-child {
	  border-bottom-right-radius: 10px !important;
	}

	/*END CUSTOM TABEL*/

	.thead{
		text-align: center;
		background-color: steelblue;
		color: white;
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
		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
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

    	<!-- Read Tabel Data Aturan -->
    	<div class="container-fluid">
    	<div class="col-md-12">
    		<div class="card">
    			<div class="card-body">
    				<div class="row">
    					<div class="col-6">
		                    <h3>Daftar Aturan (Rule)</h3>
		                </div>
		                <div class="col-6 text-right">
		                	<a href="aturan_create.php"><button class="btn btn-success"><i class="fa-solid fa-file-circle-plus"></i> <span>Input data aturan (rule)</span></button></a>
		                </div>
    				</div>

    				<hr>

    				<div class="row">
    					<div class="container-fluid">
    						<table class="table table-borderless table-striped table-hover">
    							<thead class="thead">
								    <tr>
								    	<th scope="col" style="width: 5%;">No</th>
								    	<th scope="col" style="width: 25%;">Nama Penyakit</th>
								    	<th scope="col" style="width: 25%;">Jenis Gejala</th>
								    	<th scope="col" style="width: 5%;">Nilai Densitas</th>
								    	<th scope="col" style="width: 10%;">Action</th>
								    </tr>
								</thead>

								<tbody>
									<?php 
										include "../config.php";
										$no		= 1; 
										$query	= mysqli_query($config, 'SELECT * FROM tb_penyakit_gejala
											INNER JOIN tb_penyakit ON tb_penyakit_gejala.kd_penyakit = tb_penyakit.kd_penyakit
											INNER JOIN tb_gejala ON tb_penyakit_gejala.kd_gejala = tb_gejala.kd_gejala');
							        		while ($data = mysqli_fetch_array($query)) {
							        			?>
							        				<tr>
							        					<td><?php echo $no++ ?></td>
							        					<td><?php echo $data['nama_penyakit']; ?></td>
							        					<td><?php echo $data['jns_gejala']; ?></td>
							        					<td><?php echo $data['n_densitas']; ?></td>
							        					<td>
							        						<!-- Detail -->
						        							<a href="aturan_detail.php? kd_p_g=<?php echo $data['kd_p_g']; ?>" class="btn btn-info"><i class="fa-solid fa-circle-info"></i></a>

							        						<!-- Menyunting/Edit data -->
						        							<a href="aturan_update.php? kd_p_g=<?php echo $data['kd_p_g']; ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square" style="color: white;"></i></a>

							        						<!-- Menghapus/Delete data -->
							        						<a href="aturan_delete.php? kd_p_g=<?php echo $data['kd_p_g']; ?>" onclick="return confirm('Yakin mau menghapus data ini?')" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
							        					</td>
							        				</tr>
							        			<?php } 
							        			?>
								</tbody>
    						</table>
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
	document.location='../main/login_admin.php'
	</script>
	<?php
}
?>