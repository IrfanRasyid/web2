<a href="<?= site_url('konversi/insert') ?>">Insert</a>
<br />

<table border="1">
  <thead>
    <tr>
      <th>No</th>
      <th>Satuan</th>
      <th>Suhu</th>
      <th>Kondisi</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $num = 1 ?>
    <?php foreach ($list as $row) : ?>
      <tr>
        <td><?= $num++; ?></td>
        <td><?= $row['satuan_nama']; ?></td>
        <td><?= $row['suhu']; ?></td>
        <td><?= $row['kondisi']; ?></td>
        <td nowrap>
          <a href="<?= site_url('konversi/' . $row['id']) ?>">Update</a>
        </td>
      </tr>
    <?php endforeach ?>
  </tbody>

</table>