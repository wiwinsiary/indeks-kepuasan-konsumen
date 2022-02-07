<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>form Komentar</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="proseskomentar.php" method="post">
	<center>
	<h1>Indeks Kepuasan Pelanggan</h1>
	</center>
	<br>
	Komentar Dan Saran Anda Sangat Kami Butuhkan <br>
	Untuk Meningkatkan Mualitas Pelayana Dari Restoran Kami
	<br>
	<br>
		<label>Nama Pelanggan</label>
		<input type="text" name="nama" size="25" maxlength="50">
		<label>Identitas Pelanggan</label>
		<input type="text" name="identitas" size="25" maxlength="50">
		<label>No Telp</label>
		<input type="text" name="telp" size="25" maxlength="50">
		<label>Respon</label>
		<textarea name="respon" cols="60" rows="8"></textarea>	
	</pre>
	<input type="submit" name="kirim">
	<input type="reset" name="Batal">
</body>
</html>