<form method="post">
<div class="row">
<div class="col-md-6">
  <div class="form-group">
    <input type="text" class="form-control" id="exampleFormControlInput1" name="codigo_factura" placeholder="Código Cliente" required>
  </div>
</div>
<div class="col-md-6">
  <div class="form-group">
    <input type="date" class="form-control" id="exampleFormControlInput1" name="fecha_factura" placeholder="Fecha" required>
  </div>
</div>
</div>

<input class="btn btn-primary" type="submit" value="Guardar" name="guardar">
<input class="btn btn-primary" type="button" value="Cerrar" data-dismiss="modal" name="cerrar">
</form>

<?php
if (isset($_POST['guardar'])) {
  require 'connection.php';
  $codigo_factura = $_POST['codigo_factura'];
  $fecha_factura = $_POST['fecha_factura'];

  $sql = "INSERT INTO facturas (codigocliente, fecha) VALUES ('$codigo_factura', '$fecha_factura')";

  if (mysqli_query($con, $sql)) {

} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
        mysqli_close($con);

} else {

}



?>
