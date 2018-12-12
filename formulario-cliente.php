<form method="post">
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

<?php
if (isset($_POST['guardar'])) {
  require 'connection.php';
  $nombre_cliente = $_POST['nombre_cliente'];
  $direccion_cliente = $_POST['direccion_cliente'];
  $telefono_cliente = $_POST['telefono_cliente'];
  $nit_cliente = $_POST['nit_cliente'];
  $servicio_cliente = $_POST['servicio_cliente'];

  $sql = "INSERT INTO clientes (nombre, direccion, telefono, NIT, servicio) VALUES ('$nombre_cliente', '$direccion_cliente', '$telefono_cliente', '$nit_cliente', '$servicio_cliente')";

  if (mysqli_query($con, $sql)) {

} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
        mysqli_close($con);

} else {

}



?>
