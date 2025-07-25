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
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a href="<?= base_url('dashboard') ?>" class="navbar-brand"><b>Book Store</b></a>

    <div class="collapse navbar-collapse" id="navbarMain">
      <ul class="navbar-nav mr-auto">
        <?php if($this->session->userdata('level') == 'admin'): ?>
        <li class="nav-item <?= $this->uri->segment(1) == 'dashboard' ? 'active' : '' ?>">
          <a href="<?= base_url('dashboard') ?>" class="nav-link">Dashboard</a>
        </li>
        <li class="nav-item <?= $this->uri->segment(1) == 'user' ? 'active' : '' ?>">
          <a href="<?= base_url('user') ?>" class="nav-link">Management User</a>
        </li>
        <li class="nav-item <?= $this->uri->segment(1) == 'kategori' ? 'active' : '' ?>">
          <a href="<?= base_url('kategori') ?>" class="nav-link">Kategori Buku</a>
        </li>
        <li class="nav-item <?= $this->uri->segment(1) == 'buku' ? 'active' : '' ?>">
          <a href="<?= base_url('buku') ?>" class="nav-link">Buku</a>
        </li>
        <li class="nav-item <?= $this->uri->segment(1) == 'order' ? 'active' : '' ?>">
          <a href="<?= base_url('order') ?>" class="nav-link">Order</a>
        </li>
        <li class="nav-item <?= $this->uri->segment(1) == 'laporan' ? 'active' : '' ?>">
          <a href="<?= base_url('laporan') ?>" class="nav-link">Laporan</a>
        </li>
        <?php elseif($this->session->userdata('level') == 'user'): ?>
        <li class="nav-item <?= $this->uri->segment(1) == 'dashboard' ? 'active' : '' ?>">
          <a href="<?= base_url('dashboard') ?>" class="nav-link">Dashboard</a>
        </li>
        <li class="nav-item <?= $this->uri->segment(1) == 'daftar-buku' ? 'active' : '' ?>">
          <a href="<?= base_url('daftar-buku') ?>" class="nav-link">Daftar Buku</a>
        </li>
        <li class="nav-item <?= $this->uri->segment(1) == 'riwayat' ? 'active' : '' ?>">
          <a href="<?= base_url('riwayat') ?>" class="nav-link">Riwayat Order</a>
        </li>
        <?php endif ?>
      </ul>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a href="" class="nav-link dropdown-toggle" id="userDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
            <img src="<?= base_url('/assets/img/avatar/avatar-1.png') ?>" class="rounded-circle" width="30" height="30" alt="Avatar">
            Hi, <?= $this->session->userdata('nama') ?? 'user'; ?>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a href="" class="dropdown-item"><i class="far fa-user"></i> Profile</a>
            <a href="" class="dropdown-item"><i class="fas fa-bolt"></i> Activities</a>
            <a href="" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a>
            <div class="dropdown-divider"></div>
            <a href="<?= base_url('logout') ?>" class="dropdown-item text-danger"><i class="fas fa-sign-out-alt"></i> Logout</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid mt-4">
