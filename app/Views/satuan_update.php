<form method="post" action="<?= site_url('satuan/'.$data['id']) ?>">
  <?= csrf_field() ?>
  <table>
    <tr>
      <td>Nama</td>
      <td>
        <input type="text" name="nama" value="<?= $data['nama'] ?>" />
      </td>
      <td>Titik Beku</td>
      <td>
        <input type="text" name="titik_beku" value="<?= $data['titik_beku'] ?>" />
      </td>
      <td>Titik Didih</td>
      <td>
        <input type="text" name="titik_didih" value="<?= $data['titik_didih'] ?>" />
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
        <button type="submit">Save</button>
        <a href="<?= site_url('satuan/delete/'.$data['id']) ?>" onclick="return confirm('Yakin bro?')">Delete</a>
      </td>
    </tr>
  </table>
</form>