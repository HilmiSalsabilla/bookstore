</section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="<?php echo base_url() ?>assets/modules/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/modules/popper.js"></script>
  <script src="<?php echo base_url() ?>assets/modules/tooltip.js"></script>
  <script src="<?php echo base_url() ?>assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ?>assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="<?php echo base_url() ?>assets/modules/moment.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="<?php echo base_url() ?>assets/modules/izitoast/js/iziToast.min.js"></script>
   <script src="<?php echo base_url() ?>assets/modules/datatables/datatables.min.js"></script>
  <script src="<?php echo base_url() ?>assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url() ?>assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="<?php echo base_url() ?>assets/js/page/modules-toastr.js"></script>
    <script src="<?php echo base_url() ?>assets/js/page/modules-datatables.js"></script>
  
  <!-- Template JS File -->
  <script src="<?php echo base_url() ?>assets/js/scripts.js"></script>
  <script src="<?php echo base_url() ?>assets/js/custom.js"></script>

<?php if($this->session->flashdata('pesan')) : ?>
  <script type="">
  iziToast.success({
    title: 'Welcome!',
    message: '<?php echo $this->session->flashdata('pesan'); ?>',
    position: 'topRight'
    });
  </script>
<?php endif; ?>

<?php if($this->session->flashdata('sukses')) : ?>
  <script type="">
  iziToast.success({
    title: 'Berhasil!',
    message: '<?php echo $this->session->flashdata('sukses'); ?>',
    position: 'topRight'
    });
  </script>
<?php endif; ?>

<script>
  function bukti(kode_order)
  {
    var url = '<?php echo base_url('upload-bukti') ?>';

    $("#modal-1").fireModal({body : `<form action="${url}" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="kode_order" class="form-control" value="${kode_order}">
  <div class="form-group">
  <label>Upload Bukti Bayar</label>
  <input type="file" name="bukti_bayar" class="form-control" required>
</div>
<div class="form-group">
  <button type="submit" class="btn btn-primary">Upload</button>
</div>
</form>
`})
  }

  function resi(kode_order)
  {
    var url = '<?php echo base_url('input-resi') ?>';

    $("#modal-1").fireModal({body : `<form action="${url}" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="kode_order" class="form-control" value="${kode_order}">
  <div class="form-group">
  <label>Inputkan Nomor Resi <small class="text-danger">( Format : JNE - 7585756587 )</small></label>
  <input type="text" name="nomor_resi" class="form-control" required>
</div>
<div class="form-group">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
`})
  }

</script>


</body>
</html>