<?php
session_start();
if ($_SESSION['usuario'] == 'Super Pato') {  
} else {
  echo "
        <script type='text/javascript'>
        window.location='http://localhost/patito/login.php'
        </script>
        ";
}

?>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Patito System</title>
  <!-- Favicon -->
  <link href="../assets/img/brand/logo.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="../assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="../assets/css/argon.css?v=1.0.0" rel="stylesheet">
  <meta charset="utf-8">
</head>

<body>
  <?php
    require ("../parts/header.php");
  ?>
  <div class="contenedor">
<!-- Facturas -->
<div    >
    <h1 class="titulo-pagina izquiera" >Facturas</h1>
      <div class="contenedor_peq izquiera">
        <input type="text" name="caja_busqueda" id="caja_busqueda_facturas" placeholder="Buscar facturas" class="form-control">
      </div>
      <div id="datos_factura">

      </div>
  </div>

  <!DOCTYPE html>
<html>
</div>
  
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Optional JS -->
  <script src="../assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="../assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js"></script>

  <script type="../text/javascript">
      
  </script>


</body>

</html>