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

		/*Carousel item*/
		.carousel-item{
			text-align: left;
			height: 512px;
			background: #777;
			color: white;
			position: relative;
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
			height: 150px;
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

	<title>Selamat Datang Di Website Sistem Pakar Diagnosa Penyakit Pada Ayam Broiler</title>
</head>

<body>
	<!-- Background Utama -->
	<div class="main-bg">

		<!-- Navbar -->
		<nav class="navbar navbar-expand-md navbar-light bg-light">
			<!-- Logo -->
        	<a class="navbar-brand" href="index.php">HealthyChicks</a>

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

		<!-- Carousel -->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indikator carousel -->
			<ul class="carousel-indicators">
			   <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			   <li data-target="#myCarousel" data-slide-to="1"></li>
			   <li data-target="#myCarousel" data-slide-to="2"></li>
			 </ul>

			<!-- Isi slideshow -->
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="assets/img/caro_broiler1(1).jpg">
					<div class="container">
						<h1>Welcome to HealtyChicks Webpage!</h1>
						<p>Cek kesehatan ayam broiler anda dengan layanan yang tersedia di dalam website ini.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="assets/img/caro_broiler2(2).jpg">
					<div class="container">
						<h1>Baca Daftar Penyakit</h1>
						<p>Terdapat 7 jenis penyakit pada ayam broiler yang dapat dideteksi di dalam web sistem pakar ini.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="assets/img/caro_broiler3(3).jpg">
					<div class="container">
						<h1>Diagnosa Penyakit</h1>
						<p>Segera diagnosa penyakit pada ayam broiler anda.</p>
					</div>
				</div>
			</div>

			<!-- Kontrol kanan dan kiri -->
			<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#myCarousel" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>
		</div>
		<!-- End Carousel -->

		<!-- Card -->
		<div class="container-fluid">
			<div class="card-deck">
				<!-- Daftar Penyakit -->
				<div class="card">
					<img class="card-img-top" src="assets/img/card_1.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Daftar Penyakit</h5>
						<p class="card-text">Lihat daftar penyakit yang dapat dideteksi oleh sistem pakar HealthyChicks, dilengkapi dengan deskripsi dan solusi penanganan penyakit.</p>
						<a href="penyakit.php" class="btn btn-primary">Menuju daftar penyakit</a>
					</div>
				</div>

				<!-- Diagnosa Penyakit -->
				<div class="card">
					<img class="card-img-top" src="assets/img/card_2.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Diagnosa Penyakit</h5>
						<p class="card-text">Pilih gejala yang cocok dengan kondisi ayam broiler anda, kemudian hasil dari pilihan gejala akan diolah menjadi hasil diagnosa penyakit pada ayam broiler.</p>
							<a href="main/diagnosa.php" class="btn btn-primary">Menuju diagnosa penyakit</a>
					</div>
				</div>

				<!-- Riwayat Diagnosa -->
				<div class="card">
					<img class="card-img-top" src="assets/img/card_3.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Riwayat Diagnosa</h5>
						<p class="card-text">Daftar riwayat terkait dengan hasil diagnosa penyakit pada ayam broiler yang sudah pernah diterima oleh member. <br>(Under maintenance)</p>
							<a href="#" class="btn btn-secondary disabled">Menuju riwayat diagnosa</a>
					</div>
				</div>

				<!-- Tentang Web -->
				<div class="card">
					<img class="card-img-top" src="assets/img/card_4.jpg" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Tentang Web</h5>
						<p class="card-text">Sekilas mengenai pembuatan website sistem pakar diagnosa penyakit pada ayam broiler HealthyChicks.</p>
							<a href="tentang_web.php" class="btn btn-primary">Menuju tentang web</a>
					</div>
				</div>
			</div>
		</div>
		<!-- End card -->

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