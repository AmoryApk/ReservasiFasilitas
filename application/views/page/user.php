<div class="container">
  <table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Username</th>
        <th>Status</th>

    </thead>
    <tbody>
      <?php
      foreach ($user as $row) {
        $base_url = base_url();
        echo "<tr>";

        echo "<td>" . $row['nama_admin'] . "</td>";
        echo "<td>" . $row['username'] . "</td>";

 
      ?>
        <td><?php echo anchor('Data/hapususer/' . $row['id_admin'], 'Hapus'); ?></td>
      <?php
        echo "</tr>";
      }
      ?>

    </tbody>
  </table>
</div>