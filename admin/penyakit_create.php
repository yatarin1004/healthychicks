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
	<title>Tambah Data Penyakit</title>
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


	/*MULTISELECT.CSS*/
	.ms-container{
	  background: transparent url('pictures/switch.png') no-repeat 50% 50%;
	  width: 100%;
	}

	.ms-container:after{
	  content: ".";
	  display: block;
	  height: 0;
	  line-height: 0;
	  font-size: 0;
	  clear: both;
	  min-height: 0;
	  visibility: hidden;
	}

	.ms-container .ms-selectable, .ms-container .ms-selection{
	  background: #fff;
	  color: #555555;
	  float: left;
	  width: 45%;
	}
	.ms-container .ms-selection{
	  float: right;
	}

	.ms-container .ms-list{
	  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
	  -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
	  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
	  -webkit-transition: border linear 0.2s, box-shadow linear 0.2s;
	  -moz-transition: border linear 0.2s, box-shadow linear 0.2s;
	  -ms-transition: border linear 0.2s, box-shadow linear 0.2s;
	  -o-transition: border linear 0.2s, box-shadow linear 0.2s;
	  transition: border linear 0.2s, box-shadow linear 0.2s;
	  border: 1px solid #ccc;
	  -webkit-border-radius: 3px;
	  -moz-border-radius: 3px;
	  border-radius: 3px;
	  position: relative;
	  height: 200px;
	  padding: 0;
	  overflow-y: auto;
	}

	.ms-container .ms-list.ms-focus{
	  border-color: rgba(82, 168, 236, 0.8);
	  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(82, 168, 236, 0.6);
	  -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(82, 168, 236, 0.6);
	  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(82, 168, 236, 0.6);
	  outline: 0;
	  outline: thin dotted \9;
	}

	.ms-container ul{
	  margin: 0;
	  list-style-type: none;
	  padding: 0;
	}

	.ms-container .ms-optgroup-container{
	  width: 100%;
	}

	.ms-container .ms-optgroup-label{
	  margin: 0;
	  padding: 5px 0px 0px 5px;
	  cursor: pointer;
	  color: #999;
	}

	.ms-container .ms-selectable li.ms-elem-selectable,
	.ms-container .ms-selection li.ms-elem-selection{
	  border-bottom: 1px #eee solid;
	  padding: 2px 10px;
	  color: #555;
	  font-size: 14px;
	}

	.ms-container .ms-selectable li.ms-hover,
	.ms-container .ms-selection li.ms-hover{
	  cursor: pointer;
	  color: #fff;
	  text-decoration: none;
	  background-color: #08c;
	}

	.ms-container .ms-selectable li.disabled,
	.ms-container .ms-selection li.disabled{
	  background-color: #eee;
	  color: #aaa;
	  cursor: text;
	}
	/*END MULTISELECT.CSS*/


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

    	<!-- Create Penyakit -->
    	<div class="container-fluid">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-6">
			                <h3>Tambah Data Penyakit</h3>
			            </div>
			            <div class="col-6 text-right">
			            	<a href="penyakit_tb.php"><button class="btn btn-success"><i class="fa-solid fa-circle-arrow-left"></i> <span>Kembali ke halaman data penyakit</span></button></a>
			            </div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-12">
							<form method="post" action=" " name='penyakit-create'>
								<!-- Kode Penyakit -->
								<td><input type="hidden" name="kd_penyakit" class="form-control" required></td>

								<!-- Nama Penyakit -->
								<div class="form-group row">
									<label for="namapenyakit" class="col-4 col-form-label">Nama Penyakit*</label> 
	                                <div class="col-8">
	                                <input id="nama_penyakit" name="nama_penyakit" placeholder="Nama Penyakit" class="form-control here" required="required" type="text">
	                                </div>
								</div>

								<!-- Deskripsi Penyakit -->
								<div class="form-group row">
	                                <label for="desc_penyakit" class="col-4 col-form-label">Deskripsi Penyakit</label>
	                                <div class="col-8">
	                                <textarea id="desc_penyakit" name="desc_penyakit" placeholder="Deskripsi Penyakit" cols="60" rows="6" class="form-control"></textarea>
	                                </div>
	                            </div>

	                            <!-- Solusi Penyakit -->
								<div class="form-group row">
	                                <label for="solusi" class="col-4 col-form-label">Solusi Penyakit</label>
	                                <div class="col-8">
	                                <textarea id="solusi" name="solusi" placeholder="Solusi Penyakit" cols="60" rows="6" class="form-control"></textarea>
	                                </div>
	                            </div>

								<!-- Submit -->
	                            <div class="form-group row">
	                                <div class="offset-4 col-8">
	                                	<a><button class="btn btn-success" type="submit" name="simpan" value="Simpan" onclick="return confirm('Yakin mau menginput data ini?')">Simpan data</button></a>
	                               		<!-- <input type="submit" name="simpan" value="Simpan" onclick="return confirm('Yakin mau menginput data ini?')"> -->

	                               		<a href=""><button class="btn btn-secondary" type="reset" name="reset" value="Reset">Reset</button></a>
										<!-- <input type="reset" name="reset" value="Reset"> -->
	                                </div>
	                            </div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>

		<!-- Form Action -->
		<?php
		//include config.php
		include '../config.php';

		if(isset($_POST['simpan']))
		{
			//menerima input dari form di create_tb_penyakit.php
			$kd_penyakit	= @$_POST["kd_penyakit"];
			$nama_penyakit	= @$_POST["nama_penyakit"];
			$desc_penyakit	= @$_POST["desc_penyakit"];
			$solusi			= @$_POST["solusi"];

			//query input data ke dalam tabel tb_penyakit
			$query	= "INSERT INTO tb_penyakit (kd_penyakit,nama_penyakit,desc_penyakit,solusi) VALUES ('$kd_penyakit','$nama_penyakit','$desc_penyakit','$solusi')";

			//eksekusi query input data
			$hasil	= mysqli_query($config, $query);

			//kondisi apakah berhasil atau tidak
			if ($hasil) {
				?>
				<script language="JavaScript">
				alert('Data baru berhasil ditambah');
				document.location='penyakit_tb.php'
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
		<div class="page-footer font-small blue">
			<div class="footer-copyright text-center py-3">
				<p>© 2020 Copyright <a href="/"> MDBootstrap.com</a></p>
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