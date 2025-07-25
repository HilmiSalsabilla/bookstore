<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, shrink-to-fit=no">
  <title>Book Store</title>
  
  <!-- Bootstrap & Font Awesome via CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- iziToast -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/css/iziToast.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-md-5">
          <div class="card card-primary">
            <div class="card-header text-center"><h4>LOGIN</h4></div>

            <div class="card-body">
              <form method="POST" action="<?php echo base_url('login') ?>" class="needs-validation" novalidate="">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input id="email" type="email" class="form-control" name="email" required autofocus 
                    placeholder="Please fill in your email...">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control" name="password" required
                    placeholder="Please fill in correct password...">
                </div><br>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                    Login
                  </button>
                </div>
              </form>
            </div>

          </div>
          <div class="mt-5 text-muted text-center">
            Don't have an account? <a href="<?php echo base_url('register') ?>">Register</a>
          </div>
        </div>
      </div>
    </section>
  </div>

  <footer class="footer bg-light text-center py-3 mt-4">
    <div class="container">
      <span class="text-muted">Copyrigt &copy; <?= date('Y') ?></span>
    </div>
  </footer>

  <!-- JS Libraries -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/js/iziToast.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
  
  <?php if($this->session->flashdata('error')) : ?>
    <script type="">
    iziToast.error({
      title: 'Gagal!',
      message: '<?php echo $this->session->flashdata('error'); ?>',
      position: 'topRight'
      });
    </script>
  <?php endif; ?>

</body>
</html>