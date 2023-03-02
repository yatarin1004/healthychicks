<?php 
//include config.php
include '../config.php';

//menerima data kd_admin yang dikirim dari url (read_tb_admin.php)
$kd_p_g = @$_GET["kd_p_g"];

//query delete data dari tb_admin (berdasarkan kd_admin)
$query	= "DELETE FROM tb_penyakit_gejala WHERE kd_p_g = '$kd_p_g' ";

//eksekusi query delete data
$hasil	= mysqli_query($config, $query);

// query untuk membaca semua data dengan sorting berdasarkan ID secara descending
// sorting descending ini untuk mengantisipasi record yang urutan ID nya tidak urut dalam setiap barisnya
// misal 1, 4, 2, 5, 3 
$query  = "ALTER TABLE tb_penyakit_gejala AUTO_INCREMENT = 1";
$hasil	= mysqli_query($config, $query);

// nilai awal increment
$no = 1;

while ($data = mysqli_fetch_array($hasil)) {
	// membaca id dari record yang tersisa dalam tabel
	$kd_p_g = ['kd_p_g'];

	// proses updating id dengan nilai $no
	$query2 = "UPDATE tb_penyakit_gejala SET kd_p_g = $no WHERE kd_p_g = $kd_p_g";
	mysqli_query($query2);

	// increment $no
	$no++;
}

// mengubah nilai auto increment menjadi $no terakhir ditambah 1
$query = "ALTER TABLE tb_penyakit_gejala AUTO_INCREMENT = $no";
mysqli_query($query);

//kondisi apakah berhasil atau tidak
if ($hasil) {
	?>
	<script language="JavaScript">
	alert('Data berhasil dihapus');
	document.location='aturan_tb.php'
	</script>
	<?php
}else{
	echo "Gagal menghapus data";
exit;
}
?>