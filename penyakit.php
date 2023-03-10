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

	<!-- Styling CSS -->
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
	}
	p,a{color: white;}

	</style>
	<!-- /Styling CSS -->

	<title>Daftar Penyakit</title>
</head>

<body>
	<div class="main-bg">
		<!-- Navbar -->
		<nav class="navbar navbar-expand-md navbar-light bg-light">
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

    	<!-- Tabel Daftar Penyakit -->
    	<div class="col-md-12">
    		<div class="card">
    			<div class="card-body">
    				<div class="row">
    					<div class="col-md-12">
		                    <h3>Daftar Penyakit</h3>
		                    <hr>
		                </div>
    				</div>

    				<div class="row">
    					<div class="container-fluid">
    						<table class="table table-borderless table-striped table-hover">
							  <thead class="thead">
							    <tr>
							      <th scope="col" style="width: 10%;">No</th>
							      <th scope="col" style="width: 10%;">Kode Penyakit</th>
							      <th scope="col" style="width: 70%;">Nama Penyakit</th>
							      <th scope="col" style="width: 10%;">Detail</th>
							    </tr>
							  </thead>

							  <tbody>
							    <?php 
								include "config.php";
								$no		= 1; 
								$query	= mysqli_query($config, 'SELECT * FROM tb_penyakit');
					        		while ($data = mysqli_fetch_array($query)) {
					        			?>
					        				<tr>
					        					<td><?php echo $no++ ?></td>
					        					<td><?php echo $data['kd_penyakit']; ?></td>
					        					<td><?php echo $data['nama_penyakit']; ?></td>
					        					<td>
					        						<a href="penyakit_detail.php? kd_penyakit=<?php echo $data['kd_penyakit']; ?>" class="btn btn-info btn-block"><i class="fa-solid fa-circle-info"></i>     Detail</a>
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
    	<!-- /Tabel daftar penyakit -->

    	<!-- Footer -->
		<footer class="page-footer font-small blue">

			<!-- Copyright -->
			<div class="footer-copyright text-center py-3">
				<p>?? 2020 Copyright <a href="/"> MDBootstrap.com</a></p>
			</div>
			<!-- Copyright -->

		</footer>
		<!-- /Footer -->
	</div>
</body>
</html>