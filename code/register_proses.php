<?php

$username = $_POST['uname'];
$password = password_hash($_POST['upass'], PASSWORD_BCRYPT);
$role = $_POST['role'];
$nama_cust = $_POST['nama_cust'];
$noTelp = $_POST['noTelp'];
$tanggal_lahir = $_POST['tanggal_lahir'];

$opProvinsi = $_POST['opProvinsi'];
$opKota = $_POST['opKota'];
$opKecamatan = $_POST['opKecamatan'];
$alamat = $_POST['alamat'];



$k = new PDO("mysql:host=fdb25.awardspace.net;dbname=3458537_dbtourtravel", "3458537_dbtourtravel", "Andreas#0072");

$sql = "INSERT INTO user(username, password, role, nama, noTelp, tanggal_lahir, id_provinsi, id_kabupaten, id_kecamatan, alamat) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$result = $k->prepare($sql);
$result->execute([$username, $password, $role, $nama_cust, $noTelp, $tanggal_lahir, $opProvinsi, $opKota, $opKecamatan, $alamat]);

header('Location: index.php');