<div class="container-fluid">
  <div class="section-header">
    <h4>Kelola Order</h4>
  </div>
  <hr>
  <div class="section-body">
    <div class="card card-primary">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode Order</th>
                <th>tanggal Order</th>
                <th>User</th>
                <th>Nama Buku</th>
                <th>Jumlah Order</th>
                <th>Total Harga</th>
                <th>Bukti Bayar</th>
                <th>Status Order</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($order as $key => $value): ?>
              <tr>
                <td><?= $key+1 ?></td>
                <td><?= $value -> kode_order ?></td>
                <td><?= date('d-m-Y', strtotime($value -> tgl_order)) ?></td>
                <td><?= $value -> nama ?></td>
                <td><?= $value -> nama_buku ?></td>
                <td><?= $value -> jumlah ?></td>
                <td>Rp. <?= number_format($value -> total_harga) ?></td>
                <td>
                  <?php if($value -> status_order != 'Pending'): ?>
                    <a href="<?= base_url('assets/bukti_bayar/'.$value -> bukti_bayar) ?>">Lihat Bukti</a>
                  <?php else: ?>
                    <i class="text-danger">Belum upload</i>
                  <?php endif ?>
                </td>
                <td><?= $value -> status_order ?></td>
                <td>
                  <?php if($value -> status_order == 'Menunggu konfirmasi'): ?>
                    <a onclick="return confirm('Ingin dikonfirmasi?') " href="<?= base_url('order-verifikasi/'.$value -> kode_order) ?>" class="btn btn-sm btn-primary btn-block">Verifikasi Pembayaran</a>
                  <?php endif ?>
                  <?php if($value -> status_order == 'Dikonfirmasi' && $value -> nomor_resi == null ):  ?>
                    <button onclick="resi('<?= $value -> kode_order ?>')" type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalResi">Inputkan nomor resi</button>
                  <?php elseif($value -> status_order == 'Dikonfirmasi' || $value -> status_order == 'Selesai' && $value -> nomor_resi == null): ?>
                    <i class="text-primary" style="font-size:14px">Nomor Resi: <?= $value -> nomor_resi ?></i>
                  <?php endif ?>
                </td>
              </tr>
              <?php endforeach ?>
            </tbody>
          </table>

          <!-- Modal Input Nomor Resi -->
          <div class="modal fade" id="modalResi" tabindex="-1" role="dialog" aria-labelledby="modalResiLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <form action="<?= base_url('order-input-resi') ?>" method="post">
                <input type="hidden" name="kode_order" id="kode_order_resi">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Input Nomor Resi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span>&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label>Nomor Resi <small class="text-danger">(Format: JNE - 7585756587)</small></label>
                      <input type="text" name="nomor_resi" class="form-control" required>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>