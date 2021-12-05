<div class="container">
  <table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>Nomo Ruangan</th>
        <th>Nama Ruangan</th>
        <th>Status</th>

    </thead>
    <tbody>
      <?php
      foreach ($mahasiswa as $row) {
        $base_url = base_url();
        echo "<tr>";

        echo "<td>" . $row['no_ruangan'] . "</td>";
        echo "<td>" . $row['nama_ruangan'] . "</td>";
        echo "<td>" . $row['status'] . "</td>";
 
      ?>
        <td><?php echo anchor('Data/hapusstudent/' . $row['no_ruangan'], 'Hapus'); ?></td>
      <?php
        echo "</tr>";
      }
      ?>

    </tbody>
  </table>
</div>