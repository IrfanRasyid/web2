<a href="<?= site_url('satuan/insert') ?>">Insert</a>
<br />

<table border="1">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Titik Beku</th>
        <th>Titik Didih</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $num=1 ?>
      <?php foreach ($list as $row) : ?>
        <tr>
          <td><?= $num++; ?></td>
          <td><?= $row['nama']; ?></td>
          <td><?= $row['titik_beku']; ?></td>
          <td><?= $row['titik_didih']; ?></td>
          <td nowrap>
            <a href="<?= site_url('satuan/'.$row['id']) ?>" >Update</a>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
</table>