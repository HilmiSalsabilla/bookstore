<div class="section-header">
  <h1>Detail Buku</h1>
</div>

<div class="section-body">
  <div class="row">
    <div class="col-md-4">
      <img src="<?= base_url('assets/upload'. $buku -> foto_buku) ?>" style="width: 100%; height:500px;">
    </div>
    <div class="col-md-8">
      <h4><?= $buku -> nama_buku ?><span class="float-right text-danger">Rp. <?= number_format($buku -> harga) ?></span></h4>
      <p>Penulis : <?= $buku -> penulis ?></p>
      <p>Penerbit : <?= $buku -> penerbit ?></p>
      <p>Tahun : <?= $buku -> tahun ?></p>
      <p>Jumlah Halaman : <?= $buku -> jumlah_halaman ?></p>
      <p>Deskripsi : <?= $buku -> deskripsi ?></p>

      <form action="<?= base_url('buku-order-store') ?>" method="POST">
        <input type="hidden" name="id_buku" value="<?= $buku -> id_buku ?>">
        <div class="form-group">
          <div class="row">
            <div class="col-md-2">
              <input type="number" name="qty" class="form-control" style="border: 1px solid blue;">
            </div>
            <div class="col-md-4">
              <button type="submit" class="btn btn-block btn-primary">Order Buku</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>