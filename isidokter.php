<div class="card-body">
    <a href="inputdokter.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DOKTER</a>
    <table class="table table-bordered" id="myTable">
        <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Spesialis</th>
        <th>Aksi</th>
      </tr>

      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nomor
      $query = "SELECT * FROM dokter ORDER BY nama ASC";
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
        echo "<td>$data[spesialis]</td>"; //menampilkan data spesialis
        // membuat link untuk mengedit dan menghapus data
        echo '<td>
          <a href="editdokter.php?id='.$data['id'].'" class="btn btn-sm btn-primary">Edit</a>
          <a href="hapusdokter.php?id='.$data['id'].'" class="btn btn-sm btn-danger">Hapus</a>
        </td>';
        echo "</tr>";
        $no++; // menambah nilai nomor urut
      }
      ?>
    </table>
</div>
