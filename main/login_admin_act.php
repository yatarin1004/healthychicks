<!-- Form Action -->
<?php 
//include config.php
include '../config.php';

//ambil isian dari form login
$user_admin = @$_POST['user_admin'];
$pass_admin = @$_POST['pass_admin'];

//cek data login
$sql_login 	= "SELECT * FROM tb_admin WHERE user_admin='$user_admin' AND pass_admin='$pass_admin' ";
$hasil		= mysqli_query($config ,$sql_login);
$cek		= mysqli_num_rows($hasil);

//proses
if ($cek > 0) 
{
	session_start();

	$row = mysqli_fetch_assoc($hasil);
	$_SESSION['kd_admin']=$row['kd_admin'];
	$_SESSION['email_admin']=$row['email_admin'];
	$_SESSION['user_admin']=$row['user_admin'];
	$_SESSION['pass_admin']=$row['pass_admin'];
	$_SESSION['nama_admin']=$row['nama_admin'];
			
	$_SESSION['status']="login";

	header("location:../admin/main_admin.php");
}
else
{
	?>
	<script language="JavaScript">
	alert('Username dan password anda salah');
	document.location='login_admin.php'
	</script>
	<?php
}
?>
<!-- /Form Action -->