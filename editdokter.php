<?php
  // memanggil file koneksi.php untuk membuat koneksi
  include 'koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data contoh dari database yang mempunyai id=$id
    $query = "SELECT * FROM dokter WHERE id='$id'";
    $result = mysqli_query($link, $query);
    // mengecek apakah query gagal
    if(!$result){
      die ("Query Error: ".mysqli_errno($link).
         " - ".mysqli_error($link));
    }
    // mengambil data dari database dan membuat variabel" utk menampung data
    // variabel ini nantinya akan ditampilkan pada form
    $data = mysqli_fetch_assoc($result);
    $nama = $data["nama"];
    $spesialis = $data["spesialis"];

  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    header("location:dokter.php");
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <style>
      h1{
        text-align: center;
      }
      .container{
        width: 400px;
        margin: auto;
      }
    </style>
  </head>
  <body>
    <h1>Edit Data</h1>
    <div class="container">
      <form id="form_dokter" action="edit_proses_dokter.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <fieldset>
        <legend>Edit Data Pasien</legend>
          <p>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama">
          </p>
          </p>
          <p>
            <label for="alamat">Spesialis : </label>
            <input type="text" name="spesialis" id="spesialis">
          </p>
        </fieldset>
        <p>
          <input type="submit" name="editdokter" value="Update Data">
        </p>
      </form>
  </div>
  </body>
</html>
