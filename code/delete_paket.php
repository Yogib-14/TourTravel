<?php

$id_paket = $_GET['id'];

$a = "mysql:host=fdb25.awardspace.net;dbname=3458537_dbtourtravel";
             $username="3458537_dbtourtravel";
             $password="Andreas#0072";
             $connection = new PDO($a, $username, $password);

$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$k = new PDO("mysql:host=fdb25.awardspace.net;dbname=3458537_dbtourtravel", "3458537_dbtourtravel", "Andreas#0072");

$sql = "UPDATE paket_tour SET status = 'tidak' WHERE id_paket = '$id_paket'";


$connection->exec($sql);
$connection = null;

header('Location: atur_paket.php');
?>