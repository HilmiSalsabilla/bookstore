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
                    <a onclick="return confirm('Ingin dikonfirmasi?') " href="<?= base_url('order-verifikasi/'.$value -> kode_order) ?>" class="btn btn-md btn-primary btn-block">Verifikasi Pembayaran</a>
                  <?php endif ?>
                  <?php if($value -> status_order == 'Dikonfirmasi' && $value -> nomor_resi == null ):  ?>
                    <button onclick="resi('<?= $value -> kode_order ?>')" type="button" class="btn btn-md btn-primary trigger--fire-modal-1" id="modal-1">Inputkan nomor resi</button>
                  <?php elseif($value -> status_order == 'Dikonfirmasi' || $value -> status_order == 'Selesai' && $value -> nomor_resi == null): ?>
                    <i class="text-primary" style="font-size:12px">Nomor Resi: <?= $value -> nomor_resi ?></i>
                  <?php endif ?>
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