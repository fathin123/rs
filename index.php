<?php
  // memanggil file koneksi.php untuk melakukan koneksi database
  include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  </head>
  <body>
    <?php include 'menu.php'; ?>

    <?php include 'isi.php';?>

    <div align="center">
      <a href="dokter.php" class="btn btn-md btn-success" style="margin-bottom: 10px">DATA DOKTER</a>
    </div>
  </body>
  </html>