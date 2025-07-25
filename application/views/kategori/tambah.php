<div class="container-fluid">
  <div class="section-header">
    <h4>Tambah Kategori</h4>
  </div>
  <hr>
  <div class="section-body">
    <div class="card card-primary">
      <div class="card-body">
        <form action="<?= base_url('kategori-store') ?>" methos="POST">
          <div class="form-group">
            <label for="nama_kategori">Nama Kategori</label>
            <input type="text" nama="nama_kategori" class="form-control">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

