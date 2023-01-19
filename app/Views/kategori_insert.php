<?= $this->extend('theme/index'); ?>
<?= $this->section('content'); ?>

<form method="post" action="<?= site_url('kategori/insert') ?>">
  <?= csrf_field() ?>
  <table class="table table-striped">
    <tr>
      <td>Nama</td>
      <td>
        <input type="text" name="nama" value="" class="form-control"/>                            
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
        <button type="submit"class="btn btn-primary"><i class="fas fa-save"></i>Save</button>
      </td>
    </tr>
  </table>
</form>
<?= $this->endSection('content'); ?>