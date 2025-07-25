<div class="container-fluid">
  <div class="section-header">
    <h4>Kelola Buku</h4>
  </div>
  <hr>
  <div class="section-body">
    <div class="card card-primary">
      <div class="card-body">
        <a href="<?= base_url('buku-tambah') ?>" class="btn btn-sm btn-primary">Tambah</a><br><br>
        <div class="table-responsive">
          <table class="table table-striped" id="table-1">
            <thead>
              <th>No</th>
              <th>Kategori</th>
              <th>Nama</th>
              <th>Foto</th>
              <th>Deskripsi</th>
              <th>Penulis</th>
              <th>Penerbit</th>
              <th>Tahun</th>
              <th>Halaman</th>
              <th>Harga</th>
              <th>Stok</th>
              <th>Aksi</th>
            </thead>
            <tbody>
              <?php foreach($buku as $key => $value): ?>
              <tr>
                <td><?= $key+1 ?></td>
                <td><?= $value -> nama_kategori ?></td>
                <td><?= $value -> nama_buku ?></td>
                <td>
                  <img src="<?= base_url('assets/upload/'. $value -> foto_buku) ?>" style="width: 7em;">
                </td>
                <td><?= substr ($value -> deskripsi, 0, 100). '...' ?></td>
                <td><?= $value -> penulis ?></td>
                <td><?= $value -> penerbit ?></td>
                <td><?= $value -> tahun ?></td>
                <td><?= $value -> jumlah_halaman ?></td>
                <td>Rp. <?= number_format($value -> harga) ?></td>
                <td><?= $value -> stok ?></td>
                <td>
                  <a href="<?= base_url('buku-hapus/'. $value -> id_buku) ?>" class="btn btn-sm btn-danger btn-block">Hapus</a>
                  <a href="<?= base_url('buku-edit/'. $value -> id_buku) ?>" class="btn btn-sm btn-warning btn-block">Edit</a>
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