<div class="section-header">
  <h1>Daftar Buku</h1>
</div>

<div class="section-body">
  <form action="" method="GET">
    <div class="row">
      <div class="col-md-9">
        <div class="from-group">
          <select name="kategori" id="kategori" class="form-control" required>
            <option value="all">---Tampilkan Semua Buku---</option>
            <?php foreach ($kategori as $key => $value): ?>
              <option value="<?= $value -> id_kategori ?>"><?= $value -> nama_kategori ?></option>
            <?php endforeach ?>
          </select>
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <button type="submit" class="btn btn-block btn-primary"><i class="fa fa-search"></i>Cari berdasarkan kategori</button>
        </div>
      </div>
    </div>
  </form>

  <?php foreach ($a as $key => $value): ?>
    <h2 class="section-title"><?= $key ?></h2>
    <div class="row">
      <?php foreach ($value as $b -> $isi): ?>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
          <article class="article article-style-b">
            <div class="article-header" style="height: 280px;">
              <center>
                <img src="<?= base_url('assets/upload/'. $isi -> foto_buku) ?>" style="width: 13em;">
              </center>
            </div>
            <div class="article-details">
              <div class="article-title">
                <h2><a href="<?= base_url('buku-detail-order/'. $isi -> id_buku) ?>"><?= $isi -> nama_buku ?></a></h2>
              </div>
              <i><?= $isi -> penulis ?> - <?= $isi -> tahun ?></i>
              <h5 class="text-primary">Rp. <?= number_format($isi -> harga) ?></h5>
              <div class="article-cta">
                <a href="<?= base_url('buku-detail-order/'. $isi -> id_buku) ?>">Read More <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </article>
        </div>
      <?php endforeach ?>
    </div>
  <?php endforeach ?>
</div>