<?php
$connection = mysqli_connect ("localhost", "root", "", "patito");
$consulta = "SELECT * FROM clientes";
$resultado = mysqli_query ($connection, $consulta);
