<?php
session_start();
//data dari form
$username = $_POST['uname'];
$password = $_POST['upass'];
//1.
$k = new PDO("mysql:host=fdb25.awardspace.net;dbname=3458537_dbtourtravel", "3458537_dbtourtravel", "Andreas#0072");
//2.
$sql = "SELECT * FROM user WHERE username = ?";
//3.
$result = $k->prepare($sql);
$result->execute([$username]);
//4.
if($row = $result->fetch()){
	if(password_verify($password, $row['password'])){
		$_SESSION['username'] = $row['username'];
		$_SESSION['role'] = $row['role'];
		$_SESSION['user_id'] = $row['id'];
		if($_SESSION['role'] == "customer"){
		header('Location: index.php');
	 	}
	 	if($_SESSION['role'] == "staff"){
		header('Location: index_staff.php');
	 	}
	}
	else{?>
	<script type="text/javascript">
		window.alert('Username atau password salah!');
		window.location.href='index.php';
	</script>
	<?php
	}
}else{?>
	<script type="text/javascript">
		window.alert('Username atau password salah!');
		window.location.href='index.php';
	</script>
	<?php
	
}
?>