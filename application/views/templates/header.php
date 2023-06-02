<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo $title ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
    />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('public/plugins/fontawesome/css/all.css') ?>" />
    <!-- Ionicons -->
    <link
      rel="stylesheet"
      href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"
    />
    <!-- Bootstrap core CSS -->
    <link
      rel="stylesheet"
      href="<?php echo base_url('public/plugins/bootstrap5.3/css/bootstrap.min.css') ?>"
    />
    <!-- iCheck -->
    <!-- <link rel="stylesheet" href="/public/plugins/icheck-bootstrap/icheck-bootstrap.min.css"> -->
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo base_url('public/plugins/jqvmap/jqvmap.min.css') ?>" />
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('public/plugins/adminLTE/css/adminlte.min.css') ?>" />
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo base_url('public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ?>" />
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url('public/plugins/daterangepicker/daterangepicker.css') ?>" />
    <!-- select 2 -->
    <link rel="stylesheet" href="<?php echo base_url('public/plugins/select2/css/select2.min.css') ?>" />
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo base_url('public/plugins/summernote/summernote-bs4.min.css') ?>" />
    
    <!-- My CSS -->
    <link rel="stylesheet" href="<?php echo base_url('public/css/dashboard.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('public/css/index.css') ?>" />
  </head>
  <body class="hold-transition layout-fixed">
    <div class="wrapper">
      <!-- Preloader -->
      <div
      class="preloader flex-column justify-content-center align-items-center d-none"
      >
      <img
        class="animation__shake"
        src="<?php echo base_url('public/plugins/adminLTE/img/AdminLTELogo.png') ?>"
        alt="AdminLTELogo"
        height="60"
        width="60"
      />
      </div>

      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"
            ><i class="fas fa-bars"></i
          ></a>
        </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">

        <!-- Perfil Dropdown Menu -->
        <li class="nav-item dropdown d-flex align-items-center">
          <div class="px-2">
            <a data-bs-toggle="dropdown" href="#">
              <img
              src="https://eu.ui-avatars.com/api/?name=Eduardo+Santos+Luz&background=337ED7&color=fff"
              class="img-circle border"
              width="35"
              alt="User Image"
            />
            </a>
            <div class="dropdown-menu dropdown-menu-end">
              <a href="/logout" class="dropdown-item d-flex align-items-center justify-content-start gap-3">
                <i class="fas fa-sign-out"></i>
                <span>Sair</span>
              </a>
            </div>
          </div>
        </li>

        <li class="nav-item d-none">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item d-none">
          <a
            class="nav-link"
            data-widget="control-sidebar"
            data-controlsidebar-slide="true"
            href="#"
            role="button"
          >
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-light-primary elevation-4">
      <!-- Brand Logo -->
      <a href="/dashboard" class="brand-link py-auto">
        <span class="brand-text font-weight-light px  -2">ESL Console</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar os-host-scrollbar-horizontal-hidden">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul
            class="nav nav-pills nav-sidebar flex-column nav-flat nav-legacy"
            data-widget="treeview"
            role="menu"
            data-accordion="false"
          >
            <li class="nav-header">GERAL</li>

            <li class="nav-item">
              <a href="/console" class="nav-link dashmenu-link active">
                <i class="nav-icon fad fa-user"></i>
                <p>Usuários</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="/duty" class="nav-link dashmenu-link">
                <i class="nav-icon fad fa-map-marker-alt"></i>
                <p>Endereços</p>
              </a>
            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
      </aside>

