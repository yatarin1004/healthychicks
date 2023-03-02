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

	<!-- CSS Link -->
	<link rel="stylesheet" type="text/css" href="temp/regis_member.css">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style type="text/css">
	html,body{height: 100%;}

	.main-bg{
		background-color: dimgray;
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
		height: 670px;
		width: 800px;
		background-color: rgba(0,0,0,.5);
		color: #fff;
		padding: 20px;
		-webkit-border-radius: 15px;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

	}

	.hr{
		border-color: dimgray;
	}

	.page-footer{
		background-color: darkgray;
		height: 74px;
	}
	p,a{color: white;}
	</style>

	<title>Registrasi Member</title>
</head>

<body>
	<div class="main-bg">
		<!-- Navbar -->
		<nav class="navbar navbar-expand-md navbar-light bg-light">
			<!-- Logo -->
        	<a class="navbar-brand" href="../index.php">HealthyChicks</a>

        	<!-- Toggler/pembuka menu kalo dibuka lewat hape -->
        	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
           		<span class="navbar-toggler-icon"></span>
        	</button>

        	<!-- Navbar collapse (bisa disembunyiin pas dibuka di hape) -->
	        <div class="collapse navbar-collapse" id="navbarNav">
	        	<!-- Search -->
	            <ul class="navbar-nav mr-auto"></ul>

	            <!-- Login and Register -->
	            <ul class="navbar-nav">
	                <li class="nav-item">
	                    <a class="nav-link" href="login_admin.php">Login (Admin)</a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-link" href="login_member.php">Login (Member)</a>
	                </li>
	            </ul>
	        </div>
	    </nav>
    	<!-- End navbar -->

    	<div class="container-fluid">
    		<div class="rectangle">
    			<div class="row">
					<div class="col-md-12">
		                <h3>Registrasi Member</h3>
		                <hr class="hr">
		            </div>
				</div>

				<form method="post" action="regis_member.php" name='regis_member'>
					<tr>
						<td><input type="hidden" name="kd_member" class="form-control" required></td>
					</tr>

					<div class=row>
						<div class="col-md-6">
							<tr>
								<td>Email*</td>
								<td><input type="text" name="email_member" class="form-control" placeholder="Masukkan email (wajib)" required></td>
							</tr>
							<br>
							<tr>
								<td>Password*</td>
								<td><input type="password" name="pass_member" class="form-control" placeholder="Masukkan password (wajib)" required></td>
							</tr>
							<br>
							<tr>
								<td>Nama Lengkap*</td>
								<td><input type="text" name="nama_member" class="form-control" placeholder="Masukkan nama lengkap (wajib)" required></td>
							</tr>
						</div>
						<div class="col-md-6">
							<tr>
								<td>Username*</td>
								<td><input type="text" name="user_member" class="form-control" placeholder="Masukkan username (wajib)" required></td>
							</tr>
							<br>
							<tr>
								<td>Konfirmasi Password*</td>
								<td><input type="password" name="pass_member" class="form-control" placeholder="Konfirmasi password (wajib)" required></td>
							</tr>
							<br>
							<tr>
								<td>Nomor Telepon/HP</td>
								<td><input type="text" name="telepon" class="form-control" placeholder="Masukkan no.telepon/HP aktif"></td>
							</tr>
						</div>
						<div class="col-md-12">
							<br>
							<tr>
								<td>Nama Peternakan (Jika Ada)</td>
								<td><input type="text" name="peternakan" class="form-control" placeholder="Masukkan nama peternakan"></td>
							</tr>
							<br>
							<tr>
								<td>Alamat Peternakan (Jika Ada)</td>
								<td><textarea id="alamatternak" name="alamatternak" placeholder="Masukkan alamat peternakan" cols="40" rows="2" class="form-control"></textarea>
								</td>
							</tr>
						</div>
					</div>

					<hr class="hr">

					<tr>
						<td>
							<input type="submit" class="btn btn-primary btn-block" name="simpan" id="regis-member" value="Simpan" onclick="return confirm('Yakin mau menginput data ini?')">
							<input type="reset" class="btn btn-light btn-block" name="reset" id="reset-regis-member" value="Reset">
						</td>
					</tr>
				</form>
    		</div>
    	</div>

		<!-- Form Action -->
		<?php
		//include config.php
		include '../config.php';

		if(isset($_POST['simpan']))
		{
			//menerima input dari form di regis_tb_member.php
			$kd_member		= @$_POST["kd_member"];
			$email_member	= @$_POST["email_member"];
			$user_member	= @$_POST["user_member"];
			$pass_member	= @$_POST["pass_member"];
			$nama_member	= @$_POST["nama_member"];
			$telepon		= @$_POST["telepon	"];
			$peternakan		= @$_POST["peternakan"];
			$alamatternak	= @$_POST["alamatternak"];

			//query input data ke dalam tabel regis_tb_member
			$query	= "INSERT INTO tb_member (kd_member,email_member,user_member,pass_member,nama_member) VALUES ('$kd_member','$email_member','$user_member','$pass_member','$nama_member','$telepon','$peternakan','$alamatternak')";

			//eksekusi query input data
			$hasil	= mysqli_query($config, $query);

			//kondisi apakah berhasil atau tidak
			if ($hasil) {
				?>
				<script language="JavaScript">
				alert('Berhasil membuat akun baru');
				document.location='login_member.php'
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