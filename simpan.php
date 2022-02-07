<?php 
//panggil koneksi database
include "koneksi.php";


//tampilkan data tikm
$tampil = mysqli_query($koneksi,"SELECT * from tikm limit 1");
$data = mysqli_fetch_array($tampil);
//tampung data ke dalam variabel

$id_ikm = 1;// $data['id_ikm'];
$puas = + 1;//$data ['puas'];
$cukup = + 1;//$data ['cukup'];
$kurang = + 1;//$data ['kurang'];

//ambil nilai keterangan
$keterangan = $_GET['ket'];

//uji jika keteranga tidak kosong
if (isset($keterangan)) 
 {
	//uji jika keterangan = simpan
	if ($keterangan == "puas")
	 {
		//nilai puas di tambah 1
		$puas = $puas + 1;
		//query update nilai puas ke dalam tabel ikm
		$query = "UPDATE tikm SET puas = '$puas' where id_ikm = '$id_ikm'";

	}
	elseif ($keterangan == "cukup")
	 {
		//nilai cukup di tambah 1
		$cukup = $cukup + 1;
		//query update nilai cukup ke dalam tabel ikm
		$query = "UPDATE tikm SET cukup = '$cukup' where id_ikm = '$id_ikm'";

	}
	elseif ($keterangan == "kurang")
	 {
		//nilai kurang di tambah 1
		$kurang = $kurang + 1;
		//query update nilai kurang ke dalam tabel ikm
		$query = "UPDATE tikm SET kurang = '$kurang' where id_ikm = '$id_ikm'";

	}
	

	//update data sesuai query
	mysqli_query($koneksi, $query);
	echo"<script> 
			alert('Terima Kasih, Anda Telah Melakukan Penilaian Terhaap Restoran Kami.');
			alert('Semoga Anda Senang Dengan Pelayanan Yang Telah Kami Berikan');
			document.location='index.php';
		</script>";

}


 ?>