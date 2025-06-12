<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/fontawesome-free/css/all.min.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/dist/css/adminlte.min.css');?>">
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.css');?>">
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css');?>">
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/jqvmap/jqvmap.min.css');?>">
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css');?>">
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/daterangepicker/daterangepicker.css');?>">
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/summernote/summernote-bs4.css');?>">
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css');?>">
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css');?>">
</head>
<body class="hold-transition sidebar-mini layout-fixed" >
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  

  
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- Sidebar brand/logo -->
<a href="#" class="brand-link text-center">
  <span class="brand-text font-weight-bold text-primary">Rumah Sakit Cinta Kasih</span>
</a>

<!-- Sidebar user panel (username di tengah, tanpa foto) -->
<div class="user-panel mt-3 pb-3 mb-3 d-flex justify-content-center">
  <div class="info text-center">
    <a href="#" class="d-block">
      <?= $this->session->userdata('username'); ?>
    </a>
  </div>
</div>


    <!-- Sidebar -->
    <div class="sidebar">
      <nav class="mt-2">
       <?php $level = $this->session->userdata('role'); ?>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard
                  <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
              <ul class="nav nav-treeview">
                <?php if ($level =='admin' || $level == 'user') : ?>
                  <li class="nav-item">
                <a href="<?= base_url('pasien');?>" class="nav-link">
                  <i class="fas fa-user-injured nav-icon"></i> 
                  <p>Pasien</p>
                </a>
              </li>
              <?php endif; ?>
             
              <?php if ($level == 'admin'): ?>
              <li class="nav-item">
                <a href="<?= base_url('dokter'); ?>" class="nav-link">
                  <i class="fas fa-clinic-medical nav-icon"></i>
                  <p>Dokter</p>
                </a>
              </li>
              <?php endif; ?>

               <?php if ($level == 'admin'): ?>
              <li class="nav-item">
                <a href="<?= base_url('status'); ?>" class="nav-link">
                  <i class="fas fa-clipboard-check nav-icon"></i>
                  <p>Status</p>
                </a>
              </li>
              <?php endif; ?>

               <?php if ($level == 'admin'): ?>
              <li class="nav-item">
                <a href="<?= base_url('pasien/laporan'); ?>" class="nav-link">
                  <i class="far fa-newspaper nav-icon"></i>
                  <p>Laporan</p>
                </a>
              </li>
              <?php endif; ?>
        </ul>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('auth/logout') ?>" class="nav-link">
                  <i class="nav-icon fas fa-sign-out-alt"></i>
                  <p>Logout</p>
              </a>
              </li>
              </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
              </div>