<div class="section-header">
	<h4>Dashboard</h4>
</div>
<hr>
<div class="section-body">
<?php if($this->session->userdata('level') == 'admin') : ?>
	<div class="row">
		<div class="col-lg-3 col-md-6 col-sm-6 col-12">
			<div class="card card-statistic-1">
				<div class="card-icon bg-danger">
					<i class="far fa-user" style="margin-top:25px ;"></i>
				</div>
				<div class="card-wrap">
					<div class="card-header">
						<h4>Total User</h4>
					</div>
					<div class="card-body">
						<?php echo $total_user ?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6 col-12">
			<div class="card card-statistic-1">
				<div class="card-icon bg-danger">
					<i class="far fa-newspaper" style="margin-top:25px ;"></i>
				</div>
				<div class="card-wrap">
					<div class="card-header">
						<h4>Total Kategori</h4>
					</div>
					<div class="card-body">
						<?php echo $total_kategori ?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6 col-12">
			<div class="card card-statistic-1">
				<div class="card-icon bg-warning">
					<i class="far fa-file" style="margin-top:25px ;"></i>
				</div>
				<div class="card-wrap">
					<div class="card-header">
						<h4>Total Buku</h4>
					</div>
					<div class="card-body">
						<?php echo $total_buku ?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6 col-12">
			<div class="card card-statistic-1">
				<div class="card-icon bg-success">
					<i class="fas fa-circle" style="margin-top:25px ;"></i>
				</div>
				<div class="card-wrap">
					<div class="card-header">
						<h4>Total Order</h4>
					</div>
					<div class="card-body">
						<?php echo $total_order ?>
					</div>
				</div>
			</div>
		</div>
	  </div>

    <div class="row">
    <div class="col-md-12">
      <h5>Grafik Penjualan Tahun <?php echo date('Y') ?></h5>
      <canvas id="myChart" width="400" height="125"></canvas>
    </div>
  </div>
<?php endif ?>

<?php if($this->session->userdata('level') == 'user') : ?>
	<div class="hero text-white hero-bg-image hero-bg-parallax"
		style="background-image: url('assets/img/unsplash/andre-benz-1214056-unsplash.jpg');">
		<div class="hero-inner">
			<h2>Welcome, <?php echo $this->session->userdata('nama') ?></h2>
			<p class="lead">You almost arrived, complete the information about your account to complete registration.</p>
			<div class="mt-4">
				<a href="#" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i> Setup
					Account</a>
			</div>
		</div>
	</div>
<?php endif ?>
</div>

<script>
  const ctx = document.getElementById('myChart').getContext('2d');
  const myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: <?php echo json_encode($bulan) ?>,
          datasets: [{
              label: '# Order',
              data: <?php echo json_encode($data_penjualan) ?>,
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  'rgba(255, 159, 64, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  'rgba(255, 159, 64, 0.2)'
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)',
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              y: {
                  beginAtZero: true
              }
          }
      }
  });
  </script>