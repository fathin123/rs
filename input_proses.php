<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {

	// membuat variabel untuk menampung data dari form
	$nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $usia = $_POST['usia'];
  $kamar = $_POST['kamar'];
  $checkin = $_POST['checkin'];
  $checkout = $_POST['checkout'];

  // jalankan query INSERT untuk menambah data ke database
  $query = "INSERT INTO pasien VALUES (NULL, '$nama', '$alamat', '$usia', '$kamar','$checkin','$checkout')";
  $result = mysqli_query($link, $query);
  // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($link).
           " - ".mysqli_error($link));
  }
}

// melakukan redirect (mengalihkan) ke halaman index.php
header("location:index.php");
?>
