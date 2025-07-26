<div class="container-fluid">
	<div class="section-header">
		<h4>Dashboard</h4>
	</div>
	<hr>
	<div class="section-body">
		<div class="card card-primary">
			<div class="card-body">
				<?php if($this->session->userdata('level') == 'admin') : ?>
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="card card-statistic-1">
								<div class="card-wrap">
									<div class="card-header"><h5>Total User</h5></div>
									<div class="card-body"><?php echo $total_user ?></div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="card card-statistic-1">
								<div class="card-wrap">
									<div class="card-header"><h5>Total Kategori</h5></div>
									<div class="card-body"><?php echo $total_kategori ?></div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="card card-statistic-1">
								<div class="card-wrap">
									<div class="card-header"><h5>Total Buku</h5></div>
									<div class="card-body"><?php echo $total_buku ?></div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="card card-statistic-1">
								<div class="card-wrap">
									<div class="card-header"><h5>Total Order</h5></div>
									<div class="card-body"><?php echo $total_order ?></div>
								</div>
							</div>
						</div>
					</div>

					<br>
					<div class="row">
						<div class="col-md-12">
							<h5>Grafik Penjualan Tahun <?php echo date('Y') ?></h5>
							<canvas id="myChart" width="400" height="125"></canvas>
						</div>
					</div>
				<?php endif ?>

				<?php if($this->session->userdata('level') == 'user') : ?>
					<div class="hero text-white hero-bg-image hero-bg-parallax"
						style="background-image: url('<?php echo base_url('assets/img/unsplash/dashboard.jpg'); ?>'); background-size: cover; background-position: center;">
						<div class="hero-inner p-5">
							<h3>Welcome, <?php echo $this->session->userdata('nama') ?></h3>
							<p class="lead">Silakan jelajahi koleksi kami, klik tombol di bawah untuk melihat daftar buku.</p>
							<div class="mt-4">
								<a href="<?php echo site_url('daftar-buku'); ?>" class="btn btn-light btn-md btn-icon icon-left">
									<i class="fas fa-book"></i> Lihat Daftar Buku
								</a>
							</div>
						</div>
					</div>
				<?php endif ?>
			</div>
		</div>
	</div>

	<?php if($this->session->userdata('level') == 'admin') : ?>
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
	<?php endif ?>
</div>
