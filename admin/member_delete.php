<?php 
//include config.php
include '../config.php';

//menerima data kd_member yang dikirim dari url (read_tb_member.php)
$kd_member = @$_GET["kd_member"];

//query delete data dari tb_member (berdasarkan kd_member)
$query	= "DELETE FROM tb_member WHERE kd_member = '$kd_member' ";

//eksekusi query delete data
$hasil	= mysqli_query($config, $query);

//query untuk menghapus field id
$query = "ALTER TABLE tb_member AUTO_INCREMENT = 1";
$hasil =  mysqli_query($config, $query);

//query utuk update urutan nomor
$query = "ALTER TABLE tb_member ADD kd_member INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST";
$hasil =  mysqli_query($config, $query);

// query untuk membaca semua data dengan sorting berdasarkan ID secara descending
// sorting descending ini untuk mengantisipasi record yang urutan ID nya tidak urut dalam setiap barisnya
// misal 1, 4, 2, 5, 3 
$query  = "ALTER TABLE tb_member AUTO_INCREMENT = 10001";
$hasil	= mysqli_query($config, $query);

// nilai awal increment
$no = 1;

while ($data = mysqli_fetch_array($hasil)) {
	// membaca id dari record yang tersisa dalam tabel
	$kd_member = ['kd_member'];

	// proses updating id dengan nilai $no
	$query2 = "UPDATE tb_member SET kd_member = $no WHERE kd_member = $kd_member";
	mysqli_query($query2);

	// increment $no
	$no++;
}

// mengubah nilai auto increment menjadi $no terakhir ditambah 1
$query = "ALTER TABLE tb_member AUTO_INCREMENT = $no";
mysqli_query($query);

//kondisi apakah berhasil atau tidak
if ($hasil) 
{
	?>
	<script language="JavaScript">
	alert('Data berhasil dihapus');
	document.location='member_tb.php'
	</script>
	<?php
}else{
	echo "Gagal menghapus data";
exit;
}
?>