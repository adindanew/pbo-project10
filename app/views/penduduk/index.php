<h2>Penduduk</h2>

<a href="<?php echo URL; ?>/penduduk/input" class="btn">Input Penduduk</a>

<table>
      <tr>
            <th>NO</th>
            <th>NIK</th>
            <th>NAMA LENGKAP</th>
            <th>JENIS KELAMIN</th>
            <th>NO.TELP</th>
            <th>ALAMAT</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['nik']; ?></td>
                  <td><?php echo $row['nama']; ?></td>
                  <td><?php echo $row['jenis_kelamin']; ?></td>
                  <td><?php echo $row['nomor_hp']; ?></td>
                  <td><?php echo $row['alamat_penduduk']; ?></td>
                  <td><a href="<?php echo URL; ?>/penduduk/edit/<?php echo $row['penduduk_id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/penduduk/delete/<?php echo $row['penduduk_id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>