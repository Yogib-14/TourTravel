<?php

$foto = $_FILES['foto'];
$nama_paket = $_POST['nama_paket'];
$durasi_tour = $_POST['durasi_tour'];
$hotel = $_POST['hotel'];
$makan = $_POST['makan'];
$transportasi = $_POST['transportasi'];
$wisata = $_POST['wisata'];
$harga = $_POST['harga'];
$tanggal = $_POST['tanggal'];
$status = 'aktif';


//dapatkan ekstensi file
$ext = explode(".", $foto['name']);
$ext = end($ext);
$ext = strtolower($ext);

// buat array yang berisi daftar ekstensi yang diperbolehkan
$ext_boleh = ['jpg', 'png', 'jpeg'];


// cek apakah file yang diupload memiliki ext yang valid
if(in_array($ext, $ext_boleh)){
	$sumber = $foto['tmp_name'];
	$tujuan = 'picture/paket_tour/' . $foto['name'];
	move_uploaded_file($sumber, $tujuan);


$k = new PDO("mysql:host=fdb25.awardspace.net;dbname=3458537_dbtourtravel", "3458537_dbtourtravel", "Andreas#0072");

$sql = "INSERT INTO paket_tour(gambar_tour, nama_paket, durasi_tour, hotel, makan, transportasi, wisata, harga, tanggal, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$result = $k->prepare($sql);
$result->execute([$tujuan, $nama_paket, $durasi_tour, $hotel, $makan, $transportasi, $wisata, $harga, $tanggal, $status]);


header('Location: atur_paket.php');

}else{
	echo "file tidak valid";
}
?>
<button onClick="location.href='tambah_paket.php'" type="button">Back</button><br />

