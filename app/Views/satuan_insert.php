<form method="post" action="<?= site_url('satuan/insert') ?>">
  <?= csrf_field() ?>
  <table>
    <tr>
      <td>Nama</td>
      <td>
        <input type="text" name="nama" value="" />                            
      </td>
      <td>Titik Beku</td>
      <td>
        <input type="text" name="titik_beku" value="" />                            
      </td>
      <td>Titik Didih</td>
      <td>
        <input type="text" name="titik_didih" value="" />                            
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
        <button type="submit">Save</button>
      </td>
    </tr>
  </table>
</form>