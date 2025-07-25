<div class="container-fluid">
  <div class="section-header">
    <h4>Riwayat Order</h4>
  </div>
  <hr>
  <div class="section-body">
    <div class="card card-primary">
      <div class="card-body">
        <div class="table-responsive">
          <table  class="table table-striped" id="table-1">
            <thead>
              <th>No</th>
              <th>Kode Order</th>
              <th>Tanggal Order</th>
              <th>User</th>
              <th>Nama Buku</th>
              <th>Jumlah Order</th>
              <th>Total Harga</th>
              <th>Bukti Bayar</th>
              <th>Status Order</th>
              <th>Aksi</th>
            </thead>
            <tbody>
              <?php foreach ($riwayat as $key => $value): ?>
                <tr>
                  <td><?php echo $key+1 ?></td>
                  <td class="text-center">
                    <a href="<?php echo base_url('riwayat-detail/' . $value->kode_order) ?>"><?php echo $value->kode_order ?></a>
                    <?php if(($value->status_order == 'Dikonfirmasi'  && $value->nomor_resi != null)) : ?>
                      <a onclick="return confirm('Ingin selesaikan order??')" href="<?php echo base_url('riwayat-selesai/'. $value->kode_order)?>" class="btn btn-md btn-link">Selesaikan Pesanan</a>
                    <?php endif ?>
                  </td>
                  <td><?php echo date('d-m-Y',strtotime($value->tgl_order)) ?></td>
                  <td><?php echo $value->nama ?></td>
                  <td><?php echo $value->nama_buku ?></td>
                  <td><?php echo $value->jumlah ?></td>
                  <td>Rp. <?php echo number_format($value->total_harga) ?></td>
                  <td>
                    <?php if($value->bukti_bayar == null): ?>
                      <i class="text-danger">Belum diupload</i>
                    <?php else: ?>
                      <a target="_blank" href="<?php echo base_url('assets/bukti_bayar/'. $value->bukti_bayar) ?>">Lihat Bukti</a>
                    <?php endif; ?>
                  </td>
                  <td>
                    <span class="badge <?php echo $value->status_order == 'Dikonfirmasi' || $value->status_order == 'Selesai' ? 'badge-success' : 'badge-danger' ?> " >
                      <?php echo $value->status_order ?>
                    </span>
                  </td>
                  <td>
                    <?php if ($value->status_order == 'Pending') : ?>
                      <button onclick="bukti('<?php echo $value->kode_order ?>')" type="button" class="btn btn-sm btn-primary trigger--fire-modal-1" id="modal-1">Upload Bukti Pembayaran</button>
                    <?php elseif(($value->status_order == 'Dikonfirmasi' && $value->nomor_resi != null)) : ?>
                      <i class="text-primary" style="font-size: 12px">Nomor Resi : <?php echo $value->nomor_resi ?></i>
                    <?php else : ?>
                      <i class="text-primary" style="font-size: 12px">Nomor Resi : <?php echo $value->nomor_resi ?></i>
                    <?php endif; ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
