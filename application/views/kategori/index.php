<div class="container-fluid">
  <div class="section-header">
    <h4>Kelola Kategori</h4>
  </div>
  <hr>
  <div class="section-body">
    <div class="card card-primary">
      <div class="card-body">
        <a href="<?= base_url('kategori-tambah') ?>" class="btn btn-sm btn-primary">Tambah</a><br><br>
        <div class="table-responsive">
          <table class="table table-striped" id="table-1">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($kategori as $key => $value): ?>
                <tr>
                  <td><?= $key+1 ?></td>
                  <td><?= $value -> nama_kategori ?></td>
                  <td>
                    <a href="<?= base_url('kategori-hapus/'.$value -> id_kategori) ?>" class="btn btn-sm btn-danger">Hapus</a>
                    <a href="<?= base_url('kategori-edit/'.$value -> id_kategori) ?>" class="btn btn-sm btn-warning">Edit</a>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>