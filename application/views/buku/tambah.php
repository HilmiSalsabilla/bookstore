<div class="section-header">
  <h1>Buku</h1>
</div>

<div class="section-body">
  <form method="POST" action="<?= base_url('buku-store') ?>" enctype="multipart/form-data">
    <div class="form-group">
      <label for="kategori">Kategori</label>
      <select name="id_kategori" id="id_kategori" class="form-control">
        <option value="">---Pilih Kategori---</option>
        <?php foreach ($jategori as $key => $value): ?>
          <option value="<?= $value -> id_kategori ?>"><?= $value -> nama_kategori ?></option>
        <?php endforeach ?>
      </select>
    </div>
    <div class="from-group">
      <label for="nama_buku">Nama Buku</label>
      <input type="text" name="nama_buku" class="form-control">
    </div>
    <div class="from-group">
      <label for="foto_buku">Foto Buku</label>
      <input type="file" name="foto_buku" class="form-control">
    </div>
    <div class="from-group">
      <label for="deskripsi">Deskripsi</label>
      <input type="text" name="deskripsi" class="form-control">
    </div>
    <div class="from-group">
      <label for="penulis">Penulis</label>
      <input type="text" name="penulis" class="form-control">
    </div>
    <div class="from-group">
      <label for="penerbit">Penerbit</label>
      <input type="text" name="penerbit" class="form-control">
    </div>
    <div class="from-group">
      <label for="tahun">Tahun</label>
      <input type="text" name="tahun" class="form-control">
    </div>
    <div class="from-group">
      <label for="jumlah_halaman">Jumlah Halaman</label>
      <input type="text" name="jumlah_halaman" class="form-control">
    </div>
    <div class="from-group">
      <label for="harga">Harga</label>
      <input type="number" name="harga" class="form-control">
    </div>
    <div class="from-group">
      <label for="stok">Stok</label>
      <input type="number" name="stok" class="form-control">
    </div>
    <div class="from-group">
      <button type="submit" class="btn btn-md btn-primary">Simpan</button>
    </div>
  </form>
</div>