<form method="post" action="<?= site_url('provinsi/insert') ?>">
  <?= csrf_field() ?>
  <table>
    <tr>
      <td>Nama</td>
      <td>
        <input type="text" name="nama" value="" />                            
      </td>
    </tr>
    <tr>
    <td>Wilayah</td>
      <td>
      <input type="radio" id="wib" name="wilayah" value="wib">
  <label for="wib">Waktu Indonesia Barat</label><br>
<input type="radio" id="wita" name="wilayah" value="wita">
  <label for="wita">Waktu Indonesia Tengah</label><br>
<input type="radio" id="wit" name="wilayah" value="wit">
  <label for="wit">Waktu Indonesia Timur</label><br>                  
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