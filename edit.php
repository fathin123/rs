<?php
  // memanggil file koneksi.php untuk membuat koneksi
  include 'koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data contoh dari database yang mempunyai id=$id
    $query = "SELECT * FROM pasien WHERE id='$id'";
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
    $alamat = $data["alamat"];
    $usia = $data["usia"];
    $kamar = $data["kamar"];
    $checkin = $data["checkin"];
    $checkout = $data["checkout"];

  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    header("location:index.php");
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
      <form id="form_pasien" action="edit_proses.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <fieldset>
        <legend>Edit Data Pasien</legend>
          <p>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" placeholder=Contoh: Erlina Febrianti">
          </p>
          </p>
          <p>
            <label for="alamat">Alamat : </label>
            <input type="text" name="alamat" id="alamat">
          </p>
          <p>
            <label for="usia">Usia : </label>
            <input type="text" name="usia" id="usia">
          </p>
          <p>
            <label for="kamar">Kamar : </label>
            <select name="kamar" id="kamar">
                <option value="Marwah" <?php if($data['kamar'] == 'Marwah'){ echo 'selected'; } ?>>
                Marwah </option>
                <option value="Mina" <?php if($data['kamar'] == 'Mina'){ echo 'selected'; } ?>>
                Mina</option>
                <option value="IGD" <?php if($data['kamar'] == 'IGD'){ echo 'selected'; } ?>>
                IGD</option>
              </select>
          </p>
          <p >
            <label for="checkin">Check In : </label>
            <input type="text" name="checkin" id="checkin" placeholder="Contoh:20 juni 2020">
          </p>
          <p >
            <label for="checkout">Check Out : </label>
            <input type="text" name="checkout" id="checkout" placeholder="Contoh: 20 juni 2020">
          </p>
        </fieldset>
        <p>
          <input type="submit" name="edit" value="Update Data">
        </p>
      </form>
  </div>
  </body>
</html>
