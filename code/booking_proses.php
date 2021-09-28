<?php
session_start();

$id_customer = $_POST['id_customer'];
$id_paket = $_POST['id_paket'];
$nama_customer = $_POST['nama_customer'];
$email = $_POST['email'];
$id_provinsi = $_POST['opProvinsi'];
$id_kabupaten = $_POST['opKota'];
$alamat = $_POST['alamat'];
$nama_kartu = $_POST['nama_kartu'];
$nomer_kartu = $_POST['nomer_kartu'];
$expired_month = $_POST['expired_month'];
$expired_year = $_POST['expired_year'];
$cvv = $_POST['cvv'];

			$a = "mysql:host=fdb25.awardspace.net;dbname=3458537_dbtourtravel";
             $username="3458537_dbtourtravel";
             $password="Andreas#0072";
             $connection = new PDO($a, $username, $password);

             $query="SELECT * FROM wilayah_provinsi WHERE id='$id_provinsi'";
             $hasil=$connection->prepare($query);
             $hasil->execute();
             while($row = $hasil->fetch()){ 
                $nama_provinsi = $row ['nama']; }
                

             $a = "mysql:host=fdb25.awardspace.net;dbname=3458537_dbtourtravel";
             $username="3458537_dbtourtravel";
             $password="Andreas#0072";
             $connection = new PDO($a, $username, $password);

             $query="SELECT * FROM paket_tour WHERE id_paket='$id_paket'";
             $hasil=$connection->prepare($query);
             $hasil->execute();
             while($row = $hasil->fetch()){ 
                $nama_paket = $row ['nama_paket']; }
                

             $a = "mysql:host=fdb25.awardspace.net;dbname=3458537_dbtourtravel";
             $username="3458537_dbtourtravel";
             $password="Andreas#0072";
             $connection = new PDO($a, $username, $password);

             $query="SELECT * FROM wilayah_kabupaten WHERE id='$id_kabupaten'";
             $hasil=$connection->prepare($query);
             $hasil->execute();
             while($row = $hasil->fetch()){ 
                $nama_kabupaten =  $row ['nama']; }
                ?>




<script type="text/javascript">

var nama_paket = "<?php echo $nama_paket ?>";
var nama_customer = "<?php echo $nama_customer ?>";
var email = "<?php echo $email ?>";
var nama_provinsi = "<?php echo $nama_provinsi ?>";
var nama_kabupaten = "<?php echo $nama_kabupaten ?>";
var alamat = "<?php echo $alamat ?>";
var nama_kartu = "<?php echo $nama_kartu ?>";
var nomer_kartu = "<?php echo $nomer_kartu ?>";
var expired_month = "<?php echo $expired_month ?>";
var expired_year = "<?php echo $expired_year ?>";
var cvv = "<?php echo $cvv ?>";


	if (confirm("Apakah Anda yakin ingin melanjukan booking?\n" + "nama paket : " + nama_paket + "\nnama customer : " + nama_customer + "\nemail : " + email+ "\nnama provinsi : " + nama_provinsi + "\n nama kabupaten : " + nama_kabupaten + "\nalamat" + alamat + "\nnama kartu : " + nama_kartu + "\nnomer kartu : " + nomer_kartu + "\nexpired month : " + expired_month + "\nexpired year : " + expired_year + "\ncvv : " + cvv + "\nStatus Booking dapat dilihat di riwayat booking.")) {

        <?php

$k = new PDO("mysql:host=fdb25.awardspace.net;dbname=3458537_dbtourtravel", "3458537_dbtourtravel", "Andreas#0072");

$sql = "INSERT INTO record_pembelian(id_customer, id_paket, nama_customer, email, id_provinsi, id_kabupaten, alamat, nama_kartu, nomer_kartu, expired_month, expired_year, cvv) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$result = $k->prepare($sql);
$result->execute([$id_customer, $id_paket, $nama_customer, $email, $id_provinsi, $id_kabupaten, $alamat, $nama_kartu, $nomer_kartu, $expired_month, $expired_year, $cvv]);

?>
   window.location.href='paket_wisata.php'; 
  } else {
    window.location.href='paket_wisata.php';
  }




</script>
