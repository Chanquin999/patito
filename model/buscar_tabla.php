<?php
require 'connection.php';

$salida = "";
$query = "SELECT * FROM clientes ORDER BY codigo";

if (isset($_POST['consulta'])) {
  $q = $mysqli->real_escape_string($_POST['consulta']);
  $query = "SELECT codigo, nombre, direccion, telefono, nit, servicio FROM clientes WHERE nombre LIKE '%".$q."%'';
}
  $resultado = $mysqli->query($query);

  if($resultado->num_rows > 0){

  

  } else {

  }

 ?>
