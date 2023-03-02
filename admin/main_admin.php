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

	<!-- Styling CSS -->
	<style type="text/css">
		/*Fullscreen BG*/
		html,body{height: 100%;}
		/*Main background*/
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

		.container{
			position: absolute;
			bottom: 0;
			right: 0;
			left: 0;
			padding-bottom: 50px;
		}

		.container-fluid{
			padding-top: 30px;
			padding-bottom: 30px;
		}

		.card-img-top{
			height: 225px;
			background-color: grey;
		}

		.card-text{
			color: black;
		}

		.page-footer{
			background-color: darkgray;
		}
		p,a{color: white;}
	</style>
	<!-- End Styling CSS -->

	<title>Selamat Datang Di Halaman Admin HealthyChicks</title>
</head>

<body>
	<!-- Background Utama -->
	<div class="main-bg">

		<!-- Navbar -->
		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
			<!-- Logo -->
        	<a class="navbar-brand" href="main_admin.php">HealthyChicks</a>

        	<!-- Toggler/pembuka menu kalo dibuka lewat hape -->
        	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
           		<span class="navbar-toggler-icon"></span>
        	</button>

        	<!-- Search -->
	        <div class="collapse navbar-collapse" id="navbarNav">
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

		<!-- Card-->
		<div class="container-fluid">
			<!-- Card deck 1 -->
			<div class="card-deck">
				<!-- Daftar Penyakit -->
				<div class="card">
					<img class="card-img-top" src="../assets/img/cardmin_1.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Daftar Penyakit</h5>
						<p class="card-text">Kumpulan data penyakit yang terdaftar.</p>
						<a href="penyakit_tb.php" class="btn btn-primary">Menuju tabel daftar penyakit</a>
					</div>
				</div>

				<!-- Daftar Gejala -->
				<div class="card">
					<img class="card-img-top" src="../assets/img/cardmin_2.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Daftar Gejala</h5>
						<p class="card-text">Kumpulan data gejala yang terdaftar.</p>
							<a href="gejala_tb.php" class="btn btn-primary">Menuju tabel daftar gejala</a>
					</div>
				</div>

				<!-- Daftar Aturan -->
				<div class="card">
					<img class="card-img-top" src="../assets/img/cardmin_3.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Daftar Aturan</h5>
						<p class="card-text">Kumpulan data aturan (rule) yang terdaftar.</p>
							<a href="aturan_tb.php" class="btn btn-primary">Menuju tabel daftar aturan (rule)</a>
					</div>
				</div>
			</div>
			<!-- /Card deck 1 -->
			<br>
			<!-- Card deck 2 -->
			<div class="card-deck">
				<!-- Daftar Diagnosa -->
				<div class="card">
					<img class="card-img-top" src="../assets/img/cardmin_4.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Daftar Diagnosa</h5>
						<p class="card-text">Kumpulan data diagnosa yang terdaftar.</p>
						<a href="diagnosa_tb.php" class="btn btn-primary">Menuju tabel daftar diagnosa</a>
					</div>
				</div>

				<!-- Daftar Admin -->
				<div class="card">
					<img class="card-img-top" src="../assets/img/cardmin_5.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Daftar Admin</h5>
						<p class="card-text">Kumpulan data admin yang terdaftar.</p>
							<a href="admin_tb.php" class="btn btn-primary">Menuju tabel daftar admin</a>
					</div>
				</div>

				<!-- Daftar Member -->
				<div class="card">
					<img class="card-img-top" src="../assets/img/cardmin_6.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Daftar Member</h5>
						<p class="card-text">Kumpulan data member yang terdaftar.</p>
							<a href="member_tb.php" class="btn btn-primary">Menuju tabel daftar member</a>
					</div>
				</div>
			</div>
			<!-- /Card deck 2 -->
		</div>
		<!-- End card-->

		<!-- Footer -->
		<footer class="page-footer font-small blue">

			<!-- Copyright -->
			<div class="footer-copyright text-center py-3">
				<p>© 2020 Copyright <a href="/"> MDBootstrap.com</a></p>
			</div>
			<!-- Copyright -->

		</footer>
		<!-- Footer -->

	</div>
	<!-- End background utama -->
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