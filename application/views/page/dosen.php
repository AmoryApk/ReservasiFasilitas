<div class="container">
  <table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>id</th>
        <th>Nomor ruangan</th>
        <th>Tanggal Reservasi</th>
        <th>Sesi</th>
        <th>Keterangan</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($dosen as $row) {
        $base_url = base_url();

        echo "<tr>";
        echo "<td>" . $row['id_reservasi'];
        echo "<td>" . $row['no_ruangan'];
        echo "<td>" . $row['tgl_reservasi'];
        echo "<td>" . $row['id_sesi'];
        echo "<td>" . $row['keterangan'] . "</td>"; ?>

        <td><?php echo anchor('Data/hapuslecture/' . $row['id_reservasi'], 'Hapus'); ?></td>
      <?php
        echo "</tr>";
      }
      ?>

    </tbody>
  </table>
</div>