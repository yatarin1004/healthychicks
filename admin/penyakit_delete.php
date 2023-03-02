<?php 
//include config.php
include '../config.php';

//menerima data kd_penyakit yang dikirim dari url (read_tb_penyakit.php)
$kd_penyakit = @$_GET["kd_penyakit"];

//query delete data dari tb_penyakit (berdasarkan kd_penyakit)
$query	= "DELETE FROM tb_penyakit WHERE kd_penyakit = '$kd_penyakit' ";

//eksekusi query delete data
$hasil	= mysqli_query($config, $query);

// query untuk membaca semua data dengan sorting berdasarkan ID secara descending
// sorting descending ini untuk mengantisipasi record yang urutan ID nya tidak urut dalam setiap barisnya
// misal 1, 4, 2, 5, 3 
$query  = "ALTER TABLE tb_penyakit AUTO_INCREMENT = 1";
$hasil	= mysqli_query($config, $query);

// nilai awal increment
$no = 1;

while ($data = mysqli_fetch_array($hasil)) {
	// membaca id dari record yang tersisa dalam tabel
	$kd_penyakit = ['kd_penyakit'];

	// proses updating id dengan nilai $no
	$query2 = "UPDATE tb_penyakit SET kd_penyakit = $no WHERE kd_penyakit = $kd_penyakit";
	mysqli_query($query2);

	// increment $no
	$no++;
}

// mengubah nilai auto increment menjadi $no terakhir ditambah 1
$query = "ALTER TABLE tb_penyakit AUTO_INCREMENT = $no";
mysqli_query($query);

//kondisi apakah berhasil atau tidak
if ($hasil) {
	?>
	<script language="JavaScript">
	alert('Data berhasil dihapus');
	document.location='penyakit_tb.php'
	</script>
	<?php
}else{
	echo "Gagal menghapus data";
exit;
}
?>