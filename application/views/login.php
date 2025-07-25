<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, shrink-to-fit=no">
  <title>Login | Book Store</title>
  
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
              <h4>LOGIN</h4>
            </div>
            <div class="card-body">
              <form method="POST" action="<?= base_url('login') ?>" class="needs-validation" novalidate>
                
                <!-- Email -->
                <div class="form-group">
                  <label for="email">Email</label>
                  <input id="email" type="email" class="form-control" name="email" required autofocus
                         placeholder="Please enter your mail!" autocomplete="off">
                </div>

                <!-- Password -->
                <div class="form-group">
                  <label for="password">Password</label>
                  <div class="input-group">
                    <input id="password" id="password" class="form-control" name="password" required
                         placeholder="Please enter your password!" autocomplete="off">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                        <i class="fa fa-eye" id="toggleIcon"></i>
                      </button>
                    </div>
                  </div>
                </div>

                <!-- Submit -->
                <div class="form-group mt-4">
                  <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                    Login
                  </button>
                </div>
              </form>
            </div>
          </div>

          <div class="mt-4 text-muted text-center">
            Don't have an account? <a href="<?= base_url('register') ?>">Register</a>
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

  <script>
    document.getElementById("togglePassword").addEventListener("click", function () {
      const passwordInput = document.getElementById("password");
      const icon = document.getElementById("toggleIcon");

      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
      } else {
        passwordInput.type = "password";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
      }
    });
  </script>

  <!-- iziToast error flash -->
  <?php if ($this->session->flashdata('error')): ?>
    <script>
      iziToast.error({
        title: 'Gagal!',
        message: '<?= $this->session->flashdata('error'); ?>',
        position: 'topRight'
      });
    </script>
  <?php endif; ?>
</body>
</html>