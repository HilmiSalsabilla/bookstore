<div class="container-fluid">
  <div class="section-header">
    <h4>Management User</h4>
  </div>
  <hr>
  <div class="section-body">
    <div class="card card-primary">
      <div class="card-body">
        <a href="<?= base_url('user-tambah') ?>" class="btn btn-sm btn-primary">Tambah</a>
        <br><br>
        <div class="table-responsive">
          <table class="table table-striped" id="table-1">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>Kode Pos</th>
                <th>Status</th>
                <th>Level</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($user as $key => $value):?>
              <tr>
                <td><?= $key+1 ?></td>
                <td><?= $value -> nama ?></td>
                <td><?= $value -> email ?></td>
                <td><?= $value -> password ?></td>
                <td><?= $value -> alamat ?></td>
                <td><?= $value -> no_telp ?></td>
                <td><?= $value -> kode_pos ?></td>
                <td class="text-center"><span class="badge <?= $value -> status == 'aktif' ?'badge-light':'badge-info' ?>"><?= $value -> status ?></span></td>
                <td class="text-center"><span class="badge <?= $value -> level == 'admin' ?'badge-primary':'badge-warning' ?> "></span><?= $value -> level ?></td>
                <td>
                  <a href="<?= base_url('user-hapus/'.$value -> id_user) ?>" class="btn btn-sm btn-danger">Hapus</a>
                  <a href="<?= base_url('user-aktifasi/'.$value -> id_user.'/'.$value -> status) ?>" class="btn btn-sm btn-primary">Aktifasi</a>
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