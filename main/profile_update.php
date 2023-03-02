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
		                    Nama User
		                </a>
		                <div class="dropdown-menu">
		                    <a class="dropdown-item" href="#">Lihat Profil</a>
		                    <a class="dropdown-item" href="#">Logout</a>
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

					<?php 
						//include config.php
						include '../config.php';

						//menerima data kd_member yang dikirim dari url (read_tb_member.php)
						$kd_member	= @$_GET['kd_member'];

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
								<!-- Kode Member -->
								<td><input type="hidden" name="kd_member" value="<?php echo $_SESSION['kd_member']; ?>" class="form-control" required></td>

								<!-- Email -->
								<div class="form-group row">
	                                <label for="email" class="col-4 col-form-label">Email*</label> 
	                                <div class="col-8">
	                                <input id="email_member" name="email_member" placeholder="Email" class="form-control here" required="required" type="text" value="<?php echo $_SESSION['email_member']; ?>">
	                                </div>
	                            </div>

								<!-- Username -->
								<div class="form-group row">
	                                <label for="username" class="col-4 col-form-label">Username*</label> 
	                                <div class="col-8">
	                                <input id="user_member" name="user_member" placeholder="Username" class="form-control here" required="required" type="text" value="<?php echo $_SESSION['user_member']; ?>">
	                                </div>
	                            </div>
	                            
	                            <!-- Password -->
								<div class="form-group row">
	                                <label for="password" class="col-4 col-form-label">Password*</label> 
	                                <div class="col-8">
	                                <input id="password" name="password" placeholder="Password" class="form-control here" required="required" type="password">
	                                </div>
	                            </div>

	                            <!-- Nama Lengkap -->
								<div class="form-group row">
	                                <label for="namalengkap" class="col-4 col-form-label">Nama Lengkap*</label> 
	                                <div class="col-8">
	                                <input id="nama_member" name="nama_member" placeholder="Nama Lengkap" class="form-control here" required="required" type="text" value="<?php echo $_SESSION['nama_member']; ?>">
	                                </div>
	                            </div>

	                            <!-- Info lainnya yang bisa ditambahin di DB tb_member -->
	                            <!-- No Telp/HP -->
	                            <div class="form-group row">
	                                <label for="telepon" class="col-4 col-form-label">No.Telepon/HP</label> 
	                                <div class="col-8">
	                                <input id="telepon" name="telepon" placeholder="No.Telepon/HP" class="form-control here" required="required" type="text" value="<?php echo $_SESSION['telepon']; ?>">
	                                </div>
	                            </div>

	                            <!-- Nama Peternakan -->
	                            <div class="form-group row">
	                                <label for="peternakan" class="col-4 col-form-label">Nama Peternakan (Jika Ada)</label> 
	                                <div class="col-8">
	                                <input id="peternakan" name="peternakan" placeholder="Nama Peternakan" class="form-control here" required="required" type="text" value="<?php echo $_SESSION['peternakan']; ?>">
	                                </div>
	                            </div>

	                            <!-- Alamat Peternakan -->
	                            <div class="form-group row">
	                                <label for="alamatternak" class="col-4 col-form-label">Alamat Peternakan (Jika Ada)</label> 
	                                <div class="col-8">
	                                <textarea id="alamatternak" name="alamatternak" placeholder="Alamat peternakan" cols="40" rows="4" class="form-control"><?php echo $_SESSION['alamatternak']; ?></textarea>
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
			$email_member	= mysqli_real_escape_string($config, $_POST['email_member']);
			$user_member	= mysqli_real_escape_string($config, $_POST['user_member']);
			$pass_member	= mysqli_real_escape_string($config, $_POST['pass_member']);
			$nama_member	= mysqli_real_escape_string($config, $_POST['nama_member']);
			$telepon		= mysqli_real_escape_string($config, $_POST['telepon']);
			$peternakan		= mysqli_real_escape_string($config, $_POST['peternakan']);
			$alamatternak	= mysqli_real_escape_string($config, $_POST['alamatternak']);

			if(empty($pass_member))
			{
				$kd_member		= $_SESSION['kd_member'];

				$sql 			= "UPDATE tb_member SET 
					email_member	='$email_member',
					user_member		='$user_member',
					nama_member		='$nama_member',
					telepon 		='$telepon',
					peternakan 		='$peternakan',
					alamatternak	='$alamatternak'
					WHERE kd_member='$kd_member' ";

				if(mysqli_query($config, $sql))
				{
					$_SESSION['email_member']	= $email_member;
					$_SESSION['user_member']	= $user_member;
					$_SESSION['nama_member']	= $nama_member;
					$_SESSION['telepon']		= $telepon;
					$_SESSION['peternakan']		= $peternakan;
					$_SESSION['alamatternak']	= $alamatternak;

					echo "<script text='text/javascript'>document.location.href='profile_read.php'</script>";
				}
				else
				{
					echo "Error";
				}
			}
			else
			{
				$hash	= password_hash($pass_member, PASSWORD_DEFAULT);

				$kd_member		= $_SESSION['kd_member'];

				$sql2 			= "UPDATE tb_member SET 
					email_member	='$email_member',
					user_member		='$user_member',
					pass_member		='$hash',
					nama_member		='$nama_member',
					telepon 		='$telepon',
					peternakan 		='$peternakan',
					alamatternak	='$alamatternak'
					WHERE kd_member='$kd_member' ";

				if (mysqli_query($config, $sql2)) 
				{
					session_unset();
         			session_destroy();

         			echo "<script text='text/javascript'>alert('Password berhasil dirubah, silakan login kembali') document.location.href='login_member.php'</script>";
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