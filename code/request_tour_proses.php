<?php
session_start();

if(!isset($_SESSION['user_id'])){ ?>

<script type="text/javascript">
	window.alert('Silahkan Login terlebih dahulu untuk booking tour!');
	window.location.href='request_tour.php';
</script>

<?php
                }
else{
$opProvinsiAsal = $_POST['opProvinsiAsal'];
$opProvinsiTujuan = $_POST['opProvinsiTujuan'];

$durasi_tour = $_POST['durasi_tour'];
$hotel = $_POST['hotel'];
$makan = $_POST['makan'];
$transportasi = $_POST['transportasi'];
$wisata = $_POST['wisata'];
$harga = $_POST['harga'];


$k = new PDO("mysql:host=fdb25.awardspace.net;dbname=3458537_dbtourtravel", "3458537_dbtourtravel", "Andreas#0072");

$sql = "INSERT INTO request_tour(id_provinsi_asal, id_provinsi_tujuan, durasi_tour, hotel, makan, transportasi, wisata, harga) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$result = $k->prepare($sql);
$result->execute([$opProvinsiAsal, $opProvinsiTujuan, $durasi_tour, $hotel, $makan, $transportasi, $wisata, $harga]);
?>
<script type="text/javascript">
	window.alert('Tour request Anda telah berhasil diinput!');
	window.location.href='index.php';
</script>
<?php
}
?>
<button onClick="location.href='request_tour.php'" type="button">Back</button><br />

