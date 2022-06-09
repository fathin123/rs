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
      <form id="form_dokter" action="input_proses_dokter.php" method="post">
        <fieldset>
        <legend>Tambah Data DOkter</legend>
          <p>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama">
          </p>
          <p>
            <label for="alamat">Spesialis : </label>
            <input type="text" name="spesialis" id="spesialis">
          </p>
        </fieldset>
        <p>
          <input type="submit" name="inputdokter" value="Tambah Data">
        </p>
      </form>
    </div>
  </body>
</html>
