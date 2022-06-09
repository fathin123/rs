<?php
  // buat koneksi dengan database mysql
/*  $host = "localhost";
  $user = "root";
  $pass = "";
  $name = "rs";
  $link = mysqli_connect($host,$user,$pass,$name);
  //periksa koneksi, tampilkan pesan kesalahan jika gagal
  if(!$link){
    die ("Koneksi dengan database gagal: ".mysql_connect_errno().
    " - ".mysql_connect_error());
  }
*/
$key1 = $_GET["nama"];
$alamat = $_GET["alamat"];
$checkin = $_GET["checkin"];


$host = "localhost";
 $user = "root";
  $pass = "";
  $name = "rs";
  $link = mysqli_connect($host,$user,$pass,$name);
  //periksa koneksi, tampilkan pesan kesalahan jika gagal
  if(!$link){
    die ("Koneksi dengan database gagal: ".mysqli_connect_errno().
    " - ".mysqli_connect_error());
  }

  $query = "select * from pasien where nama like '%".$key1."%' and alamat like '%".$alamat."%' and checkin like '%".$checkin."%'";
$result = mysqli_query($link,$query);

echo "<table width= '840 px' margin= 'auto' text-align= 'center' border='1'>";

while($data = mysqli_fetch_array($result)){
  echo "<td><td>".$data["nama"]."</td></td>"; 
   echo "<td><td>".$data["alamat"]."</td></td>";
   echo "<td><td>".$data["checkin"]."</td></td>";
}

echo "</table>";
?>
