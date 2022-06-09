<?php
// mengecek apakah tombol edit telah diklik
if (isset($_POST['edit'])) {
  // buat koneksi dengan database
  include("koneksi.php");

  // membuat variabel untuk menampung data dari form edit
  $id = $_POST['id'];
  $nama= $_POST['nama'];
	$alamat	= $_POST['alamat'];
	$usia	= $_POST['usia'];
	$kamar = $_POST['kamar'];
  $checkin = $_POST['checkin'];
  $checkout = $_POST['checkout'];

  //buat dan jalankan query UPDATE
  $query  = "UPDATE pasien SET ";
  $query .= "nama= '$nama', alamat = '$alamat', ";
  $query .= "usia='$usia', kamar ='$kamar', ";
  $query .= "checkin='$checkin', checkout='$checkout' ";
  $query .= "WHERE id = '$id'";

  $result = mysqli_query($link, $query);

  //periksa hasil query apakah ada error
  if(!$result) {
    die ("Query gagal dijalankan: ".mysqli_errno($link).
       " - ".mysqli_error($link));
  }
}

//lakukan redirect ke halaman index.php
header("location:index.php");


?>