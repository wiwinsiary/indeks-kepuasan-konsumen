<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
   // code...
 } 
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>INDEKS KEPUASAN KONSUMEN </title>
  </head>
  <body>
    <form action="komen.php" method="post">
       <div class="jumbotron jumbotron-fluid bg-info text-white">
      <div class="container text-center">
        <h1 class="display-4"><b>RESTORAN</b></h1>
        <p class="lead">
        <h2>
          INDEKS KEPUASAN KONSUMEN <br> Terhadap Pelayanan Restoran
        </h2>
      </div>
    </div>
    <style type="text/css">
      .box{
        padding: 5px 5Spx;
        border-radius: 2px;
      }
    </style>
    <?php
      //panggil koneksi database
    include "koneksi.php";

      //tampilkan data dari tabel tikm
    $tampil = mysqli_query($koneksi, "SELECT * from tikm");
    $data = mysqli_fetch_array($tampil);

    ?>
 <!-- Awal Container -->
 <div class="container">
   <center>
     <div class="alert alert-danger" role="alert">
      Perhatian !!! Untuk Memberikan Penilaian/Poling/Suara silakan Klik Icon/Emoji Berikut
     </div>
  </center>
<div class="row">
  <div class="col-md-4">
    <div class="bg-primary box text-white">
      <div class="row">
        <div class="col-md-6">
          <h5>PUAS</h5>
          <h2>[ <?=$data['puas']?> ]</h2>
          <h5>suara</h5>
        </div>

        <div class="col-md-6">
          <a href="komen.php?ket=puas" title="jika anda merasa puas dengan pelayanan kami,Klik icon ini">
            <img src="img/puas.png" style="width: 100px;">
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="bg-success box text-white">
      <div class="row">
        <div class="col-md-6">
          <h5>CUKUP</h5>
          <h2>[ <?=$data['cukup']?> ]</h2>
          <h5>suara</h5>
        </div>
        <div class="col-md-6">
          <a href="komen.php?ket=cukup" title="jika anda merasa Cukup dengan pelayanan kami,Klik icon ini">
            <img src="img/cukup.png" style="width: 100px;">
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="bg-danger box text-white">
      <div class="row">
        <div class="col-md-6"> 
          <h5>KURANG</h5>
          <h2>[ <?=$data['kurang']?> ]</h2>
          <h5>suara</h5>
        </div>
        <div class="col-md-6">
          <a href="komen.php?ket=kurang" title="jika anda merasa Kurang dengan pelayanan kami,Klik icon ini">
            <img src="img/kurang.png" style="width: 100px;">
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
 </div>
</form>

 <!-- Akhir Container -->
    <footer class="bg-info text-center text-white mt-3 bt-2 pb-2">
      <b>Terima Kasih Atas Partisipasinya!!!</b> 
    </footer>

  </body>
</html> 