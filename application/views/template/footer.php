</div>

<!-- end container -->

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

  <script>
    // Bootstrap validation
    (function () {
      'use strict';
      window.addEventListener('load', function () {
        var forms = document.getElementsByClassName('needs-validation');
        Array.prototype.filter.call(forms, function (form) {
          form.addEventListener('submit', function (event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>

  <!-- Notifikasi -->
  <?php if($this->session->flashdata('pesan')): ?>
    <script>
      iziToast.success({
        title: 'Welcome!',
        message: '<?= $this->session->flashdata('pesan') ?>',
        position: 'topRight'
      });
    </script>
  <?php endif; ?>

  <?php if($this->session->flashdata('sukses')): ?>
    <script>
      iziToast.success({
        title: 'Berhasil!',
        message: '<?= $this->session->flashdata('sukses') ?>',
        position: 'topRight'
      });
    </script>
  <?php endif; ?>

  <!-- Custom Modal Upload Bukti & Resi -->
  <script>
    function bukti(kode_order) {
      $('#kode_order').val(kode_order);
    }

    function resi(kode_order) {
      $('#kode_order_resi').val(kode_order);
    }
  </script>

  </body>
  </html>