<?php
$logo_img = "../assets/img/brand/logo.png";
$link_logo = "http://localhost/patito/";
?>
<!-- Sidenav -->
<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
  <div class="container-fluid">
    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Brand -->
    <a class="navbar-brand pt-0" href="<?php print $link_logo; ?>">
      <img src="<?php print $logo_img; ?>" class="navbar-brand-img" alt="...">
    </a>
    <!-- User -->
    <ul class="nav align-items-center d-md-none">
      <li class="nav-item dropdown">
        <a class="nav-link" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <div class="media align-items-center">
            <span class="avatar avatar-sm rounded-circle">
              <img alt="Image placeholder" src="<?php echo "$user_profile_img";

              ?>">
            </span>
          </div>
        </a>
      </li>
    </ul>
    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="sidenav-collapse-main">
      <!-- Collapse header -->
      <div class="navbar-collapse-header d-md-none">
        <div class="row">
          <div class="col-6 collapse-brand">
            <a href="index.html">
              <img src="assets/img/brand/blue.png">
            </a>
          </div>
          <div class="col-6 collapse-close">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
              <span></span>
              <span></span>
            </button>
          </div>
        </div>
      </div>
      <!-- Form -->
      <form class="mt-4 mb-3 d-md-none">
        <div class="input-group input-group-rounded input-group-merge">
          <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <span class="fa fa-search"></span>
            </div>
          </div>
        </div>
      </form>
      <!-- Navigation -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/patito/clientes">
            <i class="ni ni-satisfied text-blue"></i> Clientes
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/patito/facturas">
            <i class="ni ni-single-copy-04 text-orange"></i> Facturas
          </a>
         </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/patito/reportes">
            <i class="ni ni-single-02 text-yellow"></i> Reportes
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/patito/cerrar_sesion.php">
            <i class="ni ni-button-power"></i> Cerrar sesión
          </a>
        </li>
      </ul>
      <div class="copyright text-center text-xl-left text-muted">
        &copy; 2018 <a href="https://soychanq.com" class="font-weight-bold ml-1" target="_blank">JAVA Consultores</a>
      </div>
      <!-- Divider -->
      <hr class="my-3">
      <!-- Navigation -->
    </div>
  </div>
</nav>
<!-- Main content -->
<div class="main-content">
  <!-- Top navbar -->
  <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
    <div class="container-fluid">
      <!-- Brand -->
      <h1 class="text-white d-none d-lg-inline-block">Bienvenido Don Pato.</h1>
    </div>
  </nav>
  <!-- Header -->
  <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">

  </div>
