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
	<title>Detail Data Member</title>
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
		<nav class="navbar navbar-expand-md  navbar-dark bg-dark">
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


    	<!-- Detail Member -->
    	<div class="container-fluid">
    	<div class="col-md-12">
    		<div class="card">
    			<div class="card-body">
    				<div class="row">
						<div class="col-6">
			                <h3>Detail Data Member</h3>
			            </div>
			            <div class="col-6 text-right">
			            	<a href="member_tb.php"><button class="btn btn-success"><i class="fa-solid fa-circle-arrow-left"></i> <span>Kembali ke halaman data member</span></button></a>
			            </div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-12">
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
							
							<form method="post" action="detail_act_tb_member.php" name='form-detail-data-member'>
								<!-- <td>Kode Member</td> -->
								<td><input type="hidden" name="kd_member" value="<?php echo $data['kd_member']?>" class="form-control" required></td>

								<!-- Email Member -->
								<div class="form-group row">
									<label for="email" class="col-4 col-form-label">Email*</label> 
	                                <div class="col-8">
	                                <input id="email_member" name="email_member" placeholder="Email" class="form-control here" required="required" value="<?php echo $data['email_member']?>" type="text" disabled>
	                                </div>
								</div>

								<!-- Username Member -->
								<div class="form-group row">
									<label for="username" class="col-4 col-form-label">Username*</label>
	                                <div class="col-8">
	                                <input id="user_member" name="user_member" placeholder="Username" class="form-control here" required="required" value="<?php echo $data['user_member']?>" type="text" disabled>
	                                </div>
								</div>

								<!-- Password Member -->
								<div class="form-group row">
									<label for="password" class="col-4 col-form-label">Password*</label>
	                                <div class="col-8">
	                                <input id="pass_member" name="pass_member" placeholder="Password" class="form-control here" required="required" value="<?php echo $data['pass_member']?>" type="password" disabled>
	                                </div>
								</div>

								<!-- Nama Member -->
								<div class="form-group row">
									<label for="namamember" class="col-4 col-form-label">Nama Lengkap*</label>
	                                <div class="col-8">
	                                <input id="nama_member" name="nama_member" placeholder="Nama Lengkap" class="form-control here" required="required" value="<?php echo $data['nama_member']?>" type="text" disabled>
	                                </div>
								</div>

	                            <!-- No Telp/HP -->
	                            <div class="form-group row">
	                                <label for="telepon" class="col-4 col-form-label">No.Telepon/HP</label> 
	                                <div class="col-8">
	                                <input id="telepon" name="telepon" placeholder="No.Telepon/HP" class="form-control here" value="<?php echo $data['telepon']?>" type="text" disabled>
	                                </div>
	                            </div>

	                            <!-- Nama Peternakan -->
	                            <div class="form-group row">
	                                <label for="peternakan" class="col-4 col-form-label">Nama Peternakan (Jika Ada)</label> 
	                                <div class="col-8">
	                                <input id="peternakan" name="peternakan" placeholder="Nama Peternakan" class="form-control here" value="<?php echo $data['peternakan']?>" type="text" disabled>
	                                </div>
	                            </div>

	                            <!-- Alamat Ternak -->
								<div class="form-group row">
	                                <label for="alamatternak" class="col-4 col-form-label">Alamat Peternakan</label>
	                                <div class="col-8">
	                                <textarea id="alamatternak" name="alamatternak" placeholder="Alamat Ternak" cols="60" rows="6" class="form-control" disabled><?php echo $data['alamatternak']?></textarea>
	                                </div>
	                            </div>
							</form>
						</div>
					</div>
    			</div>
    		</div>
    	</div>
    	</div>

    	<!-- Footer -->
		<div class="page-footer font-small blue">
			<div class="footer-copyright text-center py-3">
				<p>?? 2020 Copyright <a href="/"> MDBootstrap.com</a></p>
			</div>
		</div>
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