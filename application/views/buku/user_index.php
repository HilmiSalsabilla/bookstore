<div class="section-header">
  <h4>Daftar Buku</h4>
</div>
<hr>
<div class="section-body">
  <div class="card card-primary">
    <div class="card-body">
      <form action="" method="GET">
        <div class="row">
          <div class="col-md-11">
            <div class="from-group">
              <select name="kategori" id="kategori" class="form-control" required>
                <option value="all">---Tampilkan semua buku berdasarkan kategori---</option>
                <?php foreach ($kategori as $key => $value): ?>
                  <option value="<?= $value -> id_kategori ?>"><?= $value -> nama_kategori ?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>
          <div class="col-md-1">
            <div class="form-group">
              <button type="submit" class="btn btn-block btn-primary"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>
      </form>

      <?php foreach ($a as $key => $value): ?>
        <h4 class="section-title"><?= $key ?></h4><hr>
        <div class="row">
          <?php foreach ($value as $b => $isi): ?>
            <div class="col-12 col-sm-6 col-md-6 col-lg-2">
              <article class="article article-style-b">
                <div class="article-header" style="height: 280px;">
                  <center>
                    <img src="<?= base_url('assets/upload/'. $isi -> foto_buku) ?>" style="width: 13em;">
                  </center>
                </div>
                <div class="article-details">
                  <div class="article-title">
                    <h5><a href="<?= base_url('buku-order-detail/'. $isi -> id_buku) ?>"><?= $isi -> nama_buku ?></a></h5>
                  </div>
                  <h6><i><?= $isi -> penulis ?> - <?= $isi -> tahun ?></i></h6>
                  <h6 class="text">Rp. <?= number_format($isi -> harga) ?></h6>
                  <div class="article-cta">
                    <h6><a href="<?= base_url('buku-order-detail/'. $isi -> id_buku) ?>">Read More <i class="fas fa-chevron-right"></i></a></h6>
                  </div>
                  <br>
                </div>
              </article>
            </div>
          <?php endforeach ?>
        </div>
      <?php endforeach ?>
    </div>
  </div> 
</div>