<div class="container-fluid">
  <div class="section-header">
    <h4>Tambah User</h4>
  </div>
  <hr>
  <div class="section-body">
    <div class="card card-primary">
      <dic class="card-body">
        <form action="<?= base_url('user-store') ?>" method="POST">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="" name="password" class="form-control">
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control">
          </div>
          <div class="form-group">
            <label for="no_telp">No Telpon</label>
            <input type="number" name="no_telp" class="form-control">
          </div>
          <div class="form-group">
            <label for="kode_pos">Kode Pos</label>
            <input type="number" name="kode_pos" class="form-control">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary">Simpan</button>
          </div>
        </form>
      </dic>
    </div>
  </div>
</div>