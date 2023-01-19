<?= $this->extend('theme/index'); ?>
<?= $this->section('content'); ?>

<form method="post" action="<?= site_url('kategori/'.$data['id']) ?>">
  <?= csrf_field() ?>
  <table class="table table-striped">
    <tr>
      <td>Nama</td>
      <td>
        <input type="text" name="nama" value="<?= $data['nama'] ?>" class="form-control" />
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
        <button type="submit">Save</button>
        <a href="<?= site_url('kategori/delete/'.$data['id']) ?>" onclick="return confirm('Yakin bro?')" class="btn btn-outline-secondary"><i class="fas fa-trash"></i></a>
      </td>
    </tr>
  </table>
</form>

<?= $this->endSection('content'); ?>