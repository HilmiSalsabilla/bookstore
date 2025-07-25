<div class="section">
  <h1>Buku</h1>
</div>

<div class="section-body">
  <form method="POST" action="<?php echo base_url('buku-update')?>" enctype="multipart/form-data">
    <input type="hidden" name="id_buku" value="<?= $buku -> id_buku?>">
    <div class="form-group">
      <label for="kategori">Kategori</label>
      <select name="id_kategori" id="id_kategori" class="form-control">
        <option value="">---Pilih Kategori---</option>
        <?php foreach ($kategori as $key => $value): ?>
        <option value="<?= $value -> id_kategori; ?>" <?= $value -> id_kategori == $buku -> id_kategori ? 'selected':'' ?>>
          <?= $value -> nama_kategori; ?>
        </option>
        <?php endforeach ?>
      </select>
    </div>
    <div class="form-group">
      <label for="nama_buku">Nama Buku</label>
      <input type="text" name="nama_buku" class="form-control" value="<?= $buku -> nama_buku?>">
      <i class="text-danger"><?= form_error('nama_buku') ?></i>
    </div>
    <div class="form-group">
      <label for="foto_buku">Foto Buku</label>
      <img src="<?= base_url('assets/upload/'.$buku -> foto_buku)?>" style="width: 7em;">
      <input type="file" name="foto_buku" class="form-control">
      <input type="hidden" name="foto_lama" class="form-control" value="<?= $buku -> foto_buku?>">
      <i class="text-danger"><?= form_error('foto_buku') ?></i>
    </div>
    <div class="form-group">
      <label for="deskripsi">Deskripsi</label>
      <input type="text" name="deskripsi" class="form-control" value="<?= $buku -> deskripsi?>">
      <i class="text-danger"><?= form_error('deskripsi') ?></i>
    </div>
    <div class="form-group">
      <label for="penulis">Penulis</label>
      <input type="text" name="penulis" class="form-control" value="<?= $buku -> penulis?>">
      <i class="text-danger"><?= form_error('penulis') ?></i>
    </div>
    <div class="form-group">
      <label for="penerbit">Penerbit</label>
      <input type="text" name="penerbit" class="form-control" value="<?= $buku -> penerbit?>">
      <i class="text-danger"><?= form_error('penerbit') ?></i>
    </div>
    <div class="form-group">
      <label for="tahun">Tahun</label>
      <input type="text" name="tahun" class="form-control" value="<?= $buku -> tahun?>">
      <i class="text-danger"><?= form_error('tahun') ?></i>
    </div>
    <div class="form-group">
      <label for="jumlah_halaman">Jumlah Halaman</label>
      <input type="text" name="jumlah_halaman" class="form-control" value="<?= $buku -> jumlah_halaman?>">
      <i class="text-danger"><?= form_error('jumlah_halaman') ?></i>
    </div>
    <div class="form-group">
      <label for="harga">Harga</label>
      <input type="text" name="harga" class="form-control" value="<?= $buku -> harga?>">
      <i class="text-danger"><?= form_error('harga') ?></i>
    </div>
    <div class="form-group">
      <label for="stok">Stok</label>
      <input type="text" name="stok" class="form-control" value="<?= $buku -> stok?>">
      <i class="text-danger"><?= form_error('stok') ?></i>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-md btn-primary">Simpan</button>
    </div>
  </form>
</div>