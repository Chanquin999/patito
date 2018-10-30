<?php
$_SESSION['ID'] = '1';
$usuario_id = $_SESSION['ID'];
$connection = mysqli_connect ("localhost", "root", "", "patito");
$consulta = "SELECT nombre, apellido FROM usuarios where id=$usuario_id";
$resultado = mysqli_query ($connection, $consulta);
?>
