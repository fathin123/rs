<?php
// mengecek apakah tombol edit telah diklik
if (isset($_POST['editdokter'])) {
  // buat koneksi dengan database
  include("koneksi.php");

  // membuat variabel untuk menampung data dari form edit
  $id = $_POST['id'];
  $nama= $_POST['nama'];
	$spesialis	= $_POST['spesialis'];

  //buat dan jalankan query UPDATE
  $query  = "UPDATE dokter SET ";
  $query .= "nama= '$nama', spesialis = '$spesialis' ";
  $query .= "WHERE id = '$id'";

  $result = mysqli_query($link, $query);

  //periksa hasil query apakah ada error
  if(!$result) {
    die ("Query gagal dijalankan: ".mysqli_errno($link).
       " - ".mysqli_error($link));
  }
}

//lakukan redirect ke halaman index.php
header("location:dokter.php");


?>