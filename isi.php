<div class="card-body">
    <a href="input.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH PASIEN</a>
    <table class="table table-bordered" id="myTable">
        <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Usia</th>
        <th>Kamar</th>
        <th>Checkin</th>
        <th>Checkout</th>
        <th>Aksi</th>
      </tr>

      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nomor
      $query = "SELECT * FROM pasien ORDER BY nama ASC";
      $result = mysqli_query($link, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($link).
           " - ".mysqli_error($link));
      }

      //buat perulangan untuk element tabel dari data pasien
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($data = mysqli_fetch_assoc($result))
      {
        // mencetak / menampilkan data
        echo "<tr>";
        echo "<td>$no</td>"; //menampilkan no urut
        echo "<td>$data[nama]</td>"; //menampilkan data nama
        echo "<td>$data[alamat]</td>"; //menampilkan data alamat
        echo "<td>$data[usia]</td>"; //menampilkan data usia
        echo "<td>$data[kamar]</td>"; //menampilkan data kamar
        echo "<td>$data[checkin]</td>"; //menampilkan data checkin
        echo "<td>$data[checkout]</td>"; //menampilkan data checkout
        // membuat link untuk mengedit dan menghapus data
        echo '<td>
          <a href="edit.php?id='.$data['id'].'" class="btn btn-sm btn-primary">Edit</a>
          <a href="hapus.php?id='.$data['id'].'" class="btn btn-sm btn-danger">Hapus</a>
        </td>';
        echo "</tr>";
        $no++; // menambah nilai nomor urut
      }
      ?>
    </table>
</div>
