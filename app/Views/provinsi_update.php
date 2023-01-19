<form method="post" action="<?= site_url('provinsi/'.$data['id']) ?>">
  <?= csrf_field() ?>
  <table>
    <tr>
    <td>Nama</td>
      <td>
        <input type="text" name="nama" value="" <?= $data['nama'] ?>" />                            
      </td>
    </tr>
    <tr>
    <label for="wilayah">Pilih Wilayah</label>

<select name="wilayah" id="wilayah">
  <option value="wib"<?php if ($data['wilayah'] == "wib"):?>selected="selected"<?php endif; ?> >WIB</option>
  <option value="wita"<?php if ($data['wilayah'] == "wita"):?>selected="selected"<?php endif; ?> >WITA</option>
  <option value="wit"<?php if ($data['wilayah'] == "wit"):?>selected="selected"<?php endif; ?> >WIT</option>
</select>
</tr>
    <tr>
      <td>&nbsp;</td>
      <td>
        <button type="submit">Save</button>
        <a href="<?= site_url('provinsi/delete/'.$data['id']) ?>" onclick="return confirm('Yakin bro?')">Delete</a>
      </td>
    </tr>
    </tr>
  </table>
</form>