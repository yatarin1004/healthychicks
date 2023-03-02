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

		.col-md-12{
			padding-top: 20px;
			padding-bottom: 20px;
		}

		/*Footer*/
		.page-footer{
			background-color: darkgray;
		}
		p,a{color: white;}
	</style>
	<!-- End Styling CSS -->

	<title>Profil Member</title>
</head>

<body>
	<!-- Background Utama -->
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
		                    <a class="dropdown-item" href="show_member_read_profil.php">Lihat Profil</a>
		                    <a class="dropdown-item" href="../index.php">Logout</a>
		                </div>
		            </li>
	            </ul>
	        </div>
	    </nav>
    	<!-- End navbar -->

		<!-- Profil member -->
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
		                    <h3>Profil Member</h3>
		                    <hr>
		                </div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<form method="POST" action="#" name='profile_read'>
								<!-- Kode Member -->
								<td><input type="hidden" name="kd_member" value="<?php echo $_SESSION['kd_member']; ?>" class="form-control" required></td>

								<!-- Email -->
								<div class="form-group row">
	                                <label for="email" class="col-4 col-form-label">Email*</label> 
	                                <div class="col-8">
	                                <input id="email_member" name="email_member" placeholder="Email" class="form-control here" required="required" type="text" value="<?php echo $_SESSION['email_member']; ?>" disabled>
	                                </div>
	                            </div>

								<!-- Username -->
								<div class="form-group row">
	                                <label for="username" class="col-4 col-form-label">Username*</label> 
	                                <div class="col-8">
	                                <input id="user_member" name="user_member" placeholder="Username" class="form-control here" required="required" type="text" value="<?php echo $_SESSION['user_member']; ?>"disabled>
	                                </div>
	                            </div>
	                            
	                            <!-- Password -->
								<div class="form-group row">
	                                <label for="password" class="col-4 col-form-label">Password*</label> 
	                                <div class="col-8">
	                                <input id="pass_member" name="pass_member" placeholder="Password" class="form-control here" required="required" type="password" value="<?php echo $_SESSION['pass_member']; ?>" disabled>
	                                </div>
	                            </div>

	                            <!-- Nama Lengkap -->
								<div class="form-group row">
	                                <label for="namalengkap" class="col-4 col-form-label">Nama Lengkap*</label> 
	                                <div class="col-8">
	                                <input id="nama_member" name="nama_member" placeholder="Nama Lengkap" class="form-control here" required="required" type="text" value="<?php echo $_SESSION['nama_member']; ?>" disabled>
	                                </div>
	                            </div>

	                            <!-- Info lainnya yang bisa ditambahin di DB tb_member -->
	                            <!-- No Telp/HP -->
	                            <div class="form-group row">
	                                <label for="telepon" class="col-4 col-form-label">No.Telepon/HP</label> 
	                                <div class="col-8">
	                                <input id="telepon" name="telepon" placeholder="No.Telepon/HP" class="form-control here" required="required" type="text" value="<?php echo $_SESSION['telepon']; ?>" disabled>
	                                </div>
	                            </div>

	                            <!-- Nama Peternakan -->
	                            <div class="form-group row">
	                                <label for="peternakan" class="col-4 col-form-label">Nama Peternakan (Jika Ada)</label> 
	                                <div class="col-8">
	                                <input id="peternakan" name="peternakan" placeholder="Nama Peternakan" class="form-control here" required="required" type="text" value="<?php echo $_SESSION['peternakan']; ?>" disabled>
	                                </div>
	                            </div>

	                            <!-- Alamat Peternakan -->
	                            <div class="form-group row">
	                                <label for="alamatternak" class="col-4 col-form-label">Alamat Peternakan (Jika Ada)</label> 
	                                <div class="col-8">
	                                <textarea id="alamatternak" name="alamatternak" placeholder="Alamat peternakan" cols="40" rows="4" class="form-control" disabled><?php echo $_SESSION['alamatternak']; ?></textarea>
	                                </div>
	                            </div>

	                            <!-- Edit Profil -->
	                            <div class="form-group row">
	                                <div class="offset-4 col-8">
	                                  <button name="submit" type="submit" class="btn btn-primary" data-toggle="modal" data-target="exampleModalLong" id="btnConfirm"><a href="profile_update.php">Edit Profil</a></button>
	                                </div>
	                            </div>
							</form>
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
		<!-- Footer -->

	</div>
	<!-- End background utama -->
</body>

<!-- JS Script -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
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