<?php
	session_start();
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

	<!-- Style CSS -->
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
		height: 450px;
		width: 400px;
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

	<title>Halaman Login Member</title>
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
	                    <a class="nav-link" href="regis_member.php">Register (Member)</a>
	                </li>
	            </ul>
	        </div>
	    </nav>
    	<!-- End navbar -->

    	<div class="container-fluid">
    		<!-- Rectangle -->
	    	<div class="rectangle">
	    		<div class="row">
					<div class="col-md-12">
		                <h3>Login Member</h3>
		                <hr class="hr">
		            </div>
				</div>

	    		<form method="post" action="login_member_act.php" name="login_member">
					<tr>
						<input type="hidden" name="login" value="Login">
					</tr>
										
					<tr>
						<td>Username</td>
						<td><input type="text" name="user_member" class="form-control" placeholder="Masukkan username" required></td>
					</tr>
					<br>

					<tr>
						<td>Password</td>
						<td><input type="password" name="pass_member" class="form-control" placeholder="Masukkan password" required></td>
					</tr>
					<br>

					<hr class="hr">

					<tr>
						<td>
							<input type="submit" class="btn btn-primary btn-block" name="login" id="login-member" value="Login" onclick="return confirm('Yakin datanya sudah benar?')">
							<br>
							<input type="reset" class="btn btn-light btn-block" name="reset" id="reset-member" value="Reset">
						</td>
					</tr>
				</form>
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