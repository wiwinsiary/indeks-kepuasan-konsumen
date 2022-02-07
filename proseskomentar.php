<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Komentar</title>
</head>
<body>
<table>
<?php 
	$Nama = $_POST['nama'];
	$Identitas = $_POST['identitas'];
	$Telp = $_POST['telp'];
	$Respon = $_POST['respon'];
	echo "<center><h1>Data komentar Konsumen</h1></center>";
	echo "<hr>";
	if (!empty($Nama)) {
		echo "Nama Pelanggan : $Nama <br>";
	}
	if (!empty($Identitas)) {
		echo "Identitas Pelanggan : $Identitas <br>";
	}
	if (!empty($Telp)) {
		echo " No Telp : $Telp <br>";
	}
	if (!empty($Respon)) {
		echo "Respon : $Respon <br>";
	}
 ?>
</table>
 <a href="komen.php">Input Data</a>
</body>
</html>