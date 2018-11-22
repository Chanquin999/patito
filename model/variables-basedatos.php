<?php
$connection = mysqli_connect ("localhost", "root", "", "cablenetpatito");
$consulta = "SELECT * FROM clientes";
$resultado = mysqli_query ($connection, $consulta);
