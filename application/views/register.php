<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Register | Book Store</title>

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
            <div class="card-header text-center">
              <h4>REGISTER</h4>
            </div>
            <div class="card-body">
              <form method="POST" action="<?= base_url('register-store') ?>">
                
                <!-- Name -->
                <div class="form-group">
                  <label for="nama">Name</label>
                  <input id="nama" type="text" class="form-control" name="nama" value="<?= set_value('nama') ?>" autofocus autocomplete="off">
                  <small class="text-danger"><?= form_error('nama') ?></small>
                </div>

                <!-- Email -->
                <div class="form-group">
                  <label for="email">Email</label>
                  <input id="email" type="email" class="form-control" name="email" value="<?= set_value('email') ?>" autocomplete="off">
                  <small class="text-danger"><?= form_error('email') ?></small>
                </div>

                <!-- Password -->
                <div class="form-group">
                  <label for="password" class="d-block">Password</label>
                  <input id="password" type="password" class="form-control pwstrength" name="password" value="<?= set_value('password') ?>" autocomplete="off">
                  <small class="text-danger"><?= form_error('password') ?></small>
                  <div id="pwindicator" class="pwindicator">
                    <div class="bar"></div>
                    <div class="label"></div>
                  </div>
                </div>

                <!-- Alamat -->
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input id="alamat" type="text" class="form-control" name="alamat" value="<?= set_value('alamat') ?>" autocomplete="off">
                  <small class="text-danger"><?= form_error('alamat') ?></small>
                </div>

                <!-- No Telepon & Kode Pos -->
                <div class="form-group">
                  <div class="row">
                    <div class="col-6">
                      <label for="no_telp">No Telepon</label>
                      <input id="no_telp" type="text" class="form-control" name="no_telp" value="<?= set_value('no_telp') ?>" autocomplete="off">
                      <small class="text-danger"><?= form_error('no_telp') ?></small>
                    </div>
                    <div class="col-6">
                      <label for="kode_pos">Kode Pos</label>
                      <input id="kode_pos" type="text" class="form-control" name="kode_pos" value="<?= set_value('kode_pos') ?>" autocomplete="off">
                      <small class="text-danger"><?= form_error('kode_pos') ?></small>
                    </div>
                  </div>
                </div>

                <!-- Submit -->
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-lg btn-block">
                    Register
                  </button>
                </div>
              </form>
            </div>
          </div>
          
          <div class="mt-4 text-muted text-center">
            Have an account? <a href="<?= base_url('login') ?>">Login</a>
          </div>
        </div>
      </div>
    </section>
  </div>

   <!-- Footer -->
  <footer class="footer bg-light text-center py-3 mt-4">
    <div class="container">
      <span class="text-muted">Copyright &copy; <?= date('Y') ?></span>
    </div>
  </footer>

  <!-- JS Libraries -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/js/iziToast.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

  <!-- Flash Message -->
  <?php if($this->session->flashdata('pesan')): ?>
    <script>
      iziToast.success({
        title: 'Selamat!',
        message: '<?= $this->session->flashdata('pesan'); ?>',
        position: 'topRight'
      });
    </script>
  <?php endif; ?>
</body>
</html>