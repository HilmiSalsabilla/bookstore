<div class="section-header">
  <h4>Laporan</h4>
</div>
<hr>
<div class="section-body">
  <div class="card card-primary">
    <div class="card-body">
      <form action="" method="post">
        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <label for="bulan">Bulan</label>
              <select name="bulan" id="bulan" class="form-control" required>
                <option value="" hidden>---Pilih Bulan---</option>
                <?php foreach($bulan as $b => $bb): ?>
                  <option value="<?= $b ?>" <?= isset($_POST['filter']) && $b ==$_POST['bulan'] ? 'selected':'' ?>><?= $bb ?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="tahun">Tahun</label>
              <select name="tahun" id="tahun" class="form-control" required>
                <option value="" hidden>---Pilih Tahun---</option>
                <?php foreach($tahun as $t): ?>
                  <option value="<?= $t ?>"<?= isset ($_POST['filter']) && $t == $_POST['tahun'] ? 'selected' : '' ?>><?= $t ?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="status">Status</label>
              <select name="status" id="status" class="form-control" required>
                <option value="" hidden>---Pilih Status---</option>
                <option value="Pending">Pending</option>
                <option value="Menunggu konfirmasi">Menunggu konfirmasi</option>
                <option value="Dikonfirmasi">Dikonfirmasi</option>
                <option value="Selesai">Selesai</option>
              </select>
              <?php if(isset($_POST['filter'])): ?>
                <script>
                  document.getElementById('status').value = '<?= $_POST['status'] ?>'
                </script>
              <?php endif ?>
            </div>
          </div>
          <div class="col-md-3">
            <label for="">&nbsp;</label>
            <button type="submit" name="filter" class="btn btn-md btn-primary btn-block">Filter Data</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <?php
    if(isset($_POST['filter'])):

      $bulan = $_POST['bulan'];
      $tahun = $_POST['tahun'];
      $status = $_POST['status'];

      $order = $this->db->query("SELECT * FROM tb_order 
        JOIN tb_user ON tb_order.id_user = tb_user.id_user 
        JOIN tb_buku ON tb_order.id_buku = tb_buku.id_buku 
        WHERE YEAR(tb_order.tgl_order) = '$tahun'
        AND MONTH(tb_order.tgl_order) = '$bulan'
        AND tb_order.status_order = '$status'
        ORDER BY tb_order.tgl_order DESC")->result();
  ?>
  
  <div class="card card-primary mt-5">
    <div class="card-header">
      <h4><a href="<?= base_url('laporan-print/'.$tahun.'/'.$bulan.'/'.$status) ?>" class="btn btn-success" style="position:absolute; right:3%">Print Data Order</a></h4>
      <h4>Data Order</h4>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table border='0.5' class="table table-striped" id=>
          <thead>
            <tr>
              <th>No</th>
              <th>Kode Order</th>
              <th>Tanggal Order</th>
              <th>User</th>
              <th>Nama Buku</th>
              <th>Jumlah Order</th>
              <th>Total Harga</th>
            </tr>
          </thead>
          <tbody>
            <?php $total = 0; ?>
            <?php foreach($order as $key => $value): ?>
            <tr>
              <td><?= $key+1 ?></td>
              <td><?= $value -> kode_order ?></td>
              <td><?= date('d-m-Y', strtotime($value -> tgl_order)) ?></td>
              <td><?= $value -> nama ?></td>
              <td><?= $value -> nama_buku ?></td>
              <td><?= $value -> jumlah ?></td>
              <td>Rp. <?= number_format($value -> total_harga) ?></td>
            </tr>
            <?php $total += $value -> total_harga ?>
            <?php endforeach ?>
            <tr>
              <th class="text-center text-primary" colspan='6'>
                <h5>Total</h5>
              </th>
              <th class=text-primary>
                <h5>Rp. <?= number_format($total) ?></h5>
              </th>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <?php endif ?>
</div>