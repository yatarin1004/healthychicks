<!-- Form Action -->
<?php 
//include config.php
include '../config.php';

//ambil isian dari form login
$user_member = @$_POST['user_member'];
$pass_member = @$_POST['pass_member'];

//cek data login
$sql_login 	= "SELECT * FROM tb_member WHERE user_member='$user_member' AND pass_member='$pass_member' ";
$hasil		= mysqli_query($config ,$sql_login);
$cek		= mysqli_num_rows($hasil);

//proses
if ($cek > 0) 
{
	session_start();

	$row = mysqli_fetch_assoc($hasil);
	$_SESSION['kd_member']=$row['kd_member'];
	$_SESSION['email_member']=$row['email_member'];
	$_SESSION['user_member']=$row['user_member'];
	$_SESSION['pass_member']=$row['pass_member'];
	$_SESSION['nama_member']=$row['nama_member'];

	$_SESSION['telepon']=$row['telepon'];
	$_SESSION['peternakan']=$row['peternakan'];
	$_SESSION['alamatternak']=$row['alamatternak'];
			
	$_SESSION['status']="login";

	header("location:page_main.php");

}
else
{
	?>
	<script language="JavaScript">
	alert('Username dan password anda salah');
	document.location='login_member.php'
	</script>
	<?php
}
?>
<!-- /Form Action -->