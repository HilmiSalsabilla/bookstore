<?php 
  function convertBulan($bulan) {
    if($bulan == '01'){
        return 'Januari';
      }elseif($bulan == '02'){
        return 'Februari';
      }elseif($bulan == '03'){
        return 'Maret';
      }elseif($bulan == '04'){
        return 'April';
      }elseif($bulan == '05'){
        return 'Mei';
      }elseif($bulan == '06'){
        return 'Juni';
      }elseif($bulan == '07'){
        return 'Juli';
      }elseif($bulan == '08'){
        return 'Agustus';
      }elseif($bulan == '09'){
        return 'September';
      }elseif($bulan == '10'){
        return 'Oktober';
      }elseif($bulan == '11'){
        return 'November';
      }elseif($bulan == '12'){
        return 'Desember';
      }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laporan Penjualan</title>
</head>
<body onload="window.print()">
  <div>
    <h2 style="text-align:center ;">
      Laporan Penjualan Buku<br>
      <?php echo convertBulan($bulan) ?>, <?php echo $tahun ?><br>
      Status : <?php echo $status ?>
    </h2>
  </div>
  <hr style="border:2px solid black ;"><br>
  <table border="1" style="width:100% ;border-collapse:collapse;">
    <thead>
      <th>No</th>
      <th>Kode Order</th>
      <th>Tanggal Order</th>
      <th>User</th>
      <th>Nama Buku</th>
      <th>Jumlah Order</th>
      <th>Total Harga</th>
    </thead>
    <tbody>
      <?php $total = 0; ?>
      <?php foreach ($order as $key => $value): ?>
        <tr>
          <td><?php echo $key+1 ?></td>
          <td><?php echo $value->kode_order ?></td>
          <td><?php echo date('d-m-Y',strtotime($value->tgl_order)) ?></td>
          <td><?php echo $value->nama ?></td>
          <td><?php echo $value->nama_buku ?></td>
          <td><?php echo $value->jumlah ?></td>
          <td>Rp. <?php echo number_format($value->total_harga) ?></td>
        </tr>
      <?php $total += $value->total_harga; ?>
      <?php endforeach; ?>
        <tr>
          <th colspan="6">Total</th>
          <th>Rp. <?php echo number_format($total) ?></th>
        </tr>
    </tbody>
  </table>
</body>
</html>