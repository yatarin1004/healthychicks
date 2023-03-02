<?php
session_start();
ob_start();

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

	<title>Selamat Datang Di Website Sistem Pakar Diagnosa Penyakit Pada Ayam Broiler</title>
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

		<!-- Profil admin -->
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
		                    <h3>Profil Admin</h3>
		                    <hr>
		                </div>
					</div>

					<?php 
						//include config.php
						include '../config.php';

						//menerima data kd_member yang dikirim dari url (read_tb_member.php)
						$kd_member	= @$_GET['kd_admin'];

						//query edit data dari tb_member (berdasarkan kd_member)
						$query	= "SELECT * FROM tb_member WHERE kd_member='$kd_member' ";

						//eksekusi query edit data
						$hasil	= mysqli_query($config, $query);

						//menyimpan data yang sudah di eksekusi dalam bentuk array assosiatif
						$data 	= mysqli_fetch_array($hasil);
					?>

					<div class="row">
						<div class="col-md-12">
							<form method="POST" action="">
								<!-- Kode admin -->
								<td><input type="hidden" name="kd_admin" value="<?php echo $_SESSION['kd_admin']; ?>" class="form-control" required></td>

								<!-- Email -->
								<div class="form-group row">
	                                <label for="email" class="col-4 col-form-label">Email*</label> 
	                                <div class="col-8">
	                                <input id="email_admin" name="email_admin" placeholder="Email" class="form-control here" required="required" type="text" value="<?php echo $_SESSION['email_admin']; ?>">
	                                </div>
	                            </div>

								<!-- Username -->
								<div class="form-group row">
	                                <label for="username" class="col-4 col-form-label">Username*</label> 
	                                <div class="col-8">
	                                <input id="user_admin" name="user_admin" placeholder="Username" class="form-control here" required="required" type="text" value="<?php echo $_SESSION['user_admin']; ?>">
	                                </div>
	                            </div>
	                            
	                            <!-- Password -->
								<div class="form-group row">
	                                <label for="password" class="col-4 col-form-label">Password*</label> 
	                                <div class="col-8">
	                                <input id="password" name="password" placeholder="Password" class="form-control here" required="required" type="password" value="<?php echo $_SESSION['pass_admin']; ?>">
	                                </div>
	                            </div>

	                            <!-- Nama Lengkap -->
								<div class="form-group row">
	                                <label for="namalengkap" class="col-4 col-form-label">Nama Lengkap*</label> 
	                                <div class="col-8">
	                                <input id="nama_admin" name="nama_admin" placeholder="Nama Lengkap" class="form-control here" required="required" type="text" value="<?php echo $_SESSION['nama_admin']; ?>">
	                                </div>
	                            </div>

	                            <!-- Submit -->
	                            <div class="form-group row">
	                                <div class="offset-4 col-8">
	                                 <a><button class="btn btn-primary" type="submit" name="simpan" value="Simpan" onclick="return confirm('Yakin mau memperbarui data ini?')">Perbarui profil</button></a>
	                                </div>
	                            </div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Form Action -->
		<?php
		include "../config.php";

		if (isset($_POST['simpan'])) 
		{
			$email_admin= mysqli_real_escape_string($config, $_POST['email_admin']);
			$user_admin	= mysqli_real_escape_string($config, $_POST['user_admin']);
			$pass_admin	= mysqli_real_escape_string($config, $_POST['pass_admin']);
			$nama_admin	= mysqli_real_escape_string($config, $_POST['nama_admin']);

			if(empty($pass_admin))
			{
				$kd_admin		= $_SESSION['kd_admin'];

				$sql 			= "UPDATE tb_admin SET 
					email_admin	='$email_admin',
					user_admin	='$user_admin',
					nama_admin	='$nama_admin'
					WHERE kd_admin='$kd_admin' ";

				if(mysqli_query($config, $sql))
				{
					$_SESSION['email_admin']= $email_admin;
					$_SESSION['user_admin']	= $user_admin;
					$_SESSION['nama_admin']	= $nama_admin;

					echo "<script text='text/javascript'>document.location.href='adm_profile_read.php'</script>";
				}
				else
				{
					echo "Error";
				}
			}
			else
			{
				$hash	= password_hash($pass_admin, PASSWORD_DEFAULT);

				$kd_admin		= $_SESSION['kd_admin'];

				$sql2 			= "UPDATE tb_member SET 
					email_admin	='$email_admin',
					user_admin	='$user_admin',
					pass_admin	='$hash',
					nama_admin	='$nama_admin'
					WHERE kd_admin='$kd_admin' ";

				if (mysqli_query($config, $sql2)) 
				{
					session_unset();
         			session_destroy();

         			echo "<script text='text/javascript'>alert('Password berhasil dirubah, silakan login kembali') document.location.href='../main/login_admin.php'</script>";
				}
				else
				{
					echo "Error";
				}
			}
		}
		?>
		<!-- /Form Action -->

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