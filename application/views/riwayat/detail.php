<div class="invoice">
  <div class="invoice-print">
    <div class="row">
      <div class="col-lg-12">
        <div class="invoice-title">
          <h4>Invoice</h4>
          <div class="invoice-number"><?php echo $order->kode_order ?></div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-6">
            <address>
              <strong>Billed To:</strong><br>
                <?php echo $order->nama ?><br>
                <?php echo $order->alamat ?><br>
            </address>
          </div>
          <div class="col-md-6 text-md-right">
            <address>
              <strong>Shipped from:</strong><br>
              Hilmi Salsabilla<br>
              Padang<br>
            </address>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6"> 
          </div>
          <div class="col-md-6 text-md-right">
            <address>
              <strong>Order Date:</strong><br>
              <?php echo date('d F Y',strtotime($order->tgl_order)) ?><br><br>
            </address>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row mt-4">
      <div class="col-md-12">
        <div class="section-title">Order Summary</div>
          <p class="section-lead">All items here cannot be deleted.</p>

            <div class="table-responsive">
              <table class="table table-striped table-hover table-md">
                <tbody>
                  <tr>
                    <th data-width="40" style="width: 40px;">#</th>
                    <th>Nama Buku</th>
                    <th class="text-center">Harga</th>
                    <th class="text-center">Jumlah</th>
                    <th class="text-right">Total</th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td><?php echo $order->nama_buku ?></td>
                    <td class="text-center">Rp <?php echo number_format($order->harga) ?></td>
                    <td class="text-center"><?php echo $order->jumlah ?></td>
                    <td class="text-right">Rp <?php echo number_format($order->total_harga) ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
                
            <div class="row mt-4">
              <div class="col-lg-8">
              </div>
              <div class="col-lg-4 text-right">
                <div class="invoice-detail-item">
                </div>
                <div class="invoice-detail-item">
                </div>
                <hr class="mt-2 mb-2">
                <div class="invoice-detail-item">
                  <div class="invoice-detail-name">Total</div>
                  <div class="invoice-detail-value invoice-detail-value-lg">Rp <?php echo number_format($order->total_harga) ?></div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
    <hr>
    
  <div class="text-md-right">
    <div class="float-lg-left mb-lg-0 mb-3">
      <a class="btn btn-danger btn-icon icon-left" href="<?php echo base_url('Riwayat') ?>">Kembali</a>
    </div>
    <!-- <button class="btn btn-warning btn-icon icon-left"><i class="fas fa-print"></i> Print</button> -->
  </div>
</div>