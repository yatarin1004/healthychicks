<?php
$db_host = 'localhost:3307'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'sistempakarbroiler'; // Nama Database

$config = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$config) {
    die ('Gagal terhubung MySQL: ' . mysqli_connect_error());   
}