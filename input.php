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
    <h1>Input Data</h1>
    <div class="container">
      <form id="form_pasien" action="input_proses.php" method="post">
        <fieldset>
        <legend>Tambah Data Pasien</legend>
          <p>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama">
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
                <option value="Marwah">Marwah</option>
                <option value="Mina">Mina</option>
                <option value="IGD">IGD</option>
              </select>
          </p>
          <p >
            <label for="checkin">Check In : </label>
            <input type="text" name="checkin" id="checkin">
          </p>
          <p >
            <label for="checkout">Check Out : </label>
            <input type="text" name="checkout" id="checkout">
          </p>

        </fieldset>
        <p>
          <input type="submit" name="input" value="Tambah Data">
        </p>
      </form>
    </div>
  </body>
</html>
