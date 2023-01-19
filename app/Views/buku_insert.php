<?= $this->extend('theme/index'); ?>
<?= $this->section('content'); ?>

<form method="post" action="<?= site_url('buku/insert') ?>">
  <?= csrf_field() ?>
  <table class="table table-striped">
    <tr>
      <td>Kategori</td>
      <td>
        <select name="kategori_id" class="form-control">
          <?php foreach($data_kategori as $kategori):?>
          <option value="<?= $kategori['id'] ?>"><?= $kategori['nama'] ?></option>
          <?php endforeach?>
        </select>
      </td>
    </tr>
    <tr>
      <td>Judul</td>
      <td>
        <input type="text" name="judul"  class="form-control"/>
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
      <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
        </td>
    </tr>
  </table>
</form>
<?= $this->endSection('content'); ?>