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

<!DOCTYPE html>
<html>

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
<!-- Clientes -->
<div id="clientes" class="activo">
    <h1 class="titulo-pagina izquiera" >Clientes</h1>
    <div class="contenedor_peq izquiera">
      <input type="text" name="caja_busqueda" id="caja_busqueda" placeholder="Buscar clientes" class="form-control">
    </div>
    <div class="contenedor_peq derecha">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nuevoCliente">Nuevo Cliente</button>
    </div>
      <div id="datos">

      </div>
  </div>
  <div class="modal fade" id="nuevoCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="formulario-cliente.php">
<div class="row">
<div class="col-md-6">
  <div class="form-group">
    <input type="text" class="form-control" id="exampleFormControlInput1" name="nombre_cliente" placeholder="Nombre" required>
  </div>
</div>
<div class="col-md-6">
  <div class="form-group">
    <input type="text" class="form-control" id="exampleFormControlInput1" name="direccion_cliente" placeholder="Dirección" required>
  </div>
</div>
</div>
<div class="row">
<div class="col-md-6">
  <div class="form-group">
    <input type="tel" class="form-control" id="exampleFormControlInput1" name="telefono_cliente" placeholder="Teléfono" required>
  </div>
</div>
<div class="col-md-6">
  <div class="form-group">
    <input type="number" class="form-control" id="exampleFormControlInput1" name="nit_cliente" placeholder="NIT" required>
  </div>
</div>
</div>
<div class="row">
<div class="col-md-6">
  <div class="form-group">
    <select class="form-control" id="exampleFormControlInput1" name="servicio_cliente" required>
      <option value="1">Cable</option>
      <option value="2">Internet</option>
      <option value="3">Cable e Internet</option>
    </select>
  </div>
</div>
</div>
<input class="btn btn-primary" type="submit" value="Guardar" name="guardar">
<input class="btn btn-primary" type="button" value="Cerrar" data-dismiss="modal" name="cerrar">
</form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="nuevaFactura" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva Factura</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form method="post" action="crear_factura.php">
          <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" class="form-control" id="input1" name="codigo_cliente" placeholder="Código Cliente" required readonly >
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="date" class="form-control" id="input2" name="fecha_factura" placeholder="Fecha" required>
            </div>
          </div>
          </div>

          <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" class="form-control" id="input3" name="servicio_factura" placeholder="Servicio" required readonly title='Cable: 1, Internet: 2, Cable e Internet: 3'>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="number" class="form-control" id="input4" name="monto_factura" placeholder="Monto" required readonly>
            </div>
          </div>
          </div>

          <input class="btn btn-primary" type="submit" value="Guardar" name="guardar">
          <input class="btn btn-primary" type="button" value="Cerrar" data-dismiss="modal" name="cerrar">
          </form>
      </div>
    </div>
  </div>
</div>
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