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
	<title>Tentang Web</title>
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
		display: flex;
	  	justify-content: center;
	  	align-items: center;
	  	margin-top: 30px;
	  	margin-bottom: 32px;
	}

	.rectangle{
		height: 450px;
		width: 1280px;
		background-color: rgba(0,0,0,.5);
		color: #fff;
		padding: 20px;
		-webkit-border-radius: 15px;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

	}

	.img{
		position: relative;
		z-index: 1;
		height: 85%;
		margin-left: 2px;
		-webkit-border-radius: 20px;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}

	.healthy{
		font-family: arial black;
		font-size: 100px;
		text-shadow: 1px 1px 5px black;
		padding-top: 180px;
		padding-left: 10px;
		position: absolute;
		top: 20px;
		z-index: 2;
		color: #fff;

	}

	.chicks{
		font-family: arial black;
		font-size: 100px;
		text-shadow: 1px 1px 5px black;
		padding-top: 265px;
		padding-left: 10px;
		position: absolute;
		top: 20px;
		z-index: 3;
		color: #fff;
	}

	.desc{
		font-style: italic;
		text-indent: 40px;
		color: black;
	}

	.page-footer{
		background-color: darkgray;
		height: 74px;
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

    	<!-- Tentang Web -->
    	<div class="container-fluid">
    		<div class="rectangle">
				<div class="row">
					<div class="col-md-6">
						<p class="healthy">Healthy</p>
						<p class="chicks">Chicks</p>
						<img class="img responsive" src="../assets/img/about_1.jpg">
					</div>
					<div class="col-md-6 details">
						<h3 class="header">Tentang Web</h3>
						<hr>
						<p class="desc">
							Web HealthyChicks merupakan web sistem pakar untuk diagnosa penyakit pada ayam broiler. 
						</p>
						<p class="desc">
							"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
						</p>
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