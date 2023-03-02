<?php 
//include config.php
include '../config.php';

//menerima data kd_admin yang dikirim dari url (read_tb_admin.php)
$kd_admin = @$_GET["kd_admin"];

//query delete data dari tb_admin (berdasarkan kd_admin)
$query	= "DELETE FROM tb_admin WHERE kd_admin = '$kd_admin' ";

//eksekusi query delete data
$hasil	= mysqli_query($config, $query);

// query untuk membaca semua data dengan sorting berdasarkan ID secara descending
// sorting descending ini untuk mengantisipasi record yang urutan ID nya tidak urut dalam setiap barisnya
// misal 1, 4, 2, 5, 3 
$query  = "ALTER TABLE tb_admin AUTO_INCREMENT = 1";
$hasil	= mysqli_query($config, $query);

// nilai awal increment
$no = 1;

while ($data = mysqli_fetch_array($hasil)) {
	// membaca id dari record yang tersisa dalam tabel
	$kd_admin = ['kd_admin'];

	// proses updating id dengan nilai $no
	$query2 = "UPDATE tb_admin SET kd_admin = $no WHERE kd_admin = $kd_admin";
	mysqli_query($query2);

	// increment $no
	$no++;
}

// mengubah nilai auto increment menjadi $no terakhir ditambah 1
$query = "ALTER TABLE tb_admin AUTO_INCREMENT = $no";
mysqli_query($query);

//kondisi apakah berhasil atau tidak
if ($hasil) {
	?>
	<script language="JavaScript">
	alert('Data berhasil dihapus');
	document.location='admin_tb.php'
	</script>
	<?php
}else{
	echo "Gagal menghapus data";
exit;
}
?>