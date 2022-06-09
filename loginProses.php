<?php
	include "koneksi.php";

	$username=$_POST['username'];
	$password=$_POST['password'];

	$query="SELECT * FROM petugas WHERE username='$username' and password='$password'";
	$result=mysqli_query($link, $query);
	$cek=mysqli_num_rows($result);

	if($cek){
		echo "Anda berhasil login, silahkan menuju"; ?>
		<a href="index.php">Halaman HOME</a>
	<?php
	}else{
		echo "Anda gagal login, silahkan";?>
		<a href="login.php">Login Kembali</a>
	<?php
		echo mysqli_error($link);
	}
?>