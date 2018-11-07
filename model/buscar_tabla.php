<?php
require 'connection.php';

$salida = "";
$query = "SELECT * FROM clientes ORDER BY id";

if (isset($_POST['consulta'])) {
  $q = $mysqli->real_escape_string($_POST['consulta']);
}


 ?>
