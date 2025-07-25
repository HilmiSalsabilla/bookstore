<div class="section-header">
  <h4>Edit Kategori</h4>
</div>
<hr>
<div class="section-body">
  <form action="<?= base_url('kategori-update') ?>" methos="POST">
    <input type="hidden" name="id_kategori" value="<?= $kategori -> id_kategori ?>">
    <div class="form-group">
      <label for="nama_kategori">Nama Kategori</label>
      <input type="text" nama="nama_kategori" class="form-control" value="<?= $kategori -> nama_kategori ?>">
      <i class="text-danger"><?= form_error('nama_kategori') ?></i>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-md btn-primary">Simpan</button>
    </div>
  </form>
</div>