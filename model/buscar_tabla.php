<?php
  $mysqli = new mysqli("localhost", "root", "", "cablenetpatito");
  $salida = "";
  $query = "SELECT * FROM clientes ORDER BY codigo LIMIT 20";

  if (isset($_POST['consulta'])) {
    $q = $mysqli->real_escape_string($_POST['consulta']);
    $query = "SELECT codigo, nombre, direccion, telefono, NIT, servicio FROM clientes WHERE nombre LIKE '%".$q."%' OR codigo LIKE '%".$q."%'";
  }
    $resultado = $mysqli->query($query);


    if($resultado->num_rows > 0){
      $salida.="<table class='table'>
                <thead>
                  <tr>
                    <td>Código</td>
                    <td>Nombre</td>
                    <td>Dirección</td>
                    <td>Teléfono</td>
                    <td>NIT</td>
                    <td>Servicio</td>
                    <td>Editar</td>
                    <td>Borrar</td>
                  </tr>
                </thead>
                <tbody>";
                while($fila = $resultado->fetch_assoc()){
                  if ($fila['servicio'] == 1) {
                    $servicio = "<td>Internet</td>";
                  } elseif ($fila['servicio'] == 2) {
                    $servicio = "<td>Cable</td>";
                  } elseif ($fila['servicio'] == 3) {
                    $servicio = "<td>Cable e Internet</td>";
                  }
                  $salida.="<tr>
                              <td>". $fila['codigo'] . "</td>
                              <td>" . $fila['nombre'] . "</td>
                              <td>" . $fila['direccion'] . "</td>
                              <td>" . $fila['telefono'] . "</td>
                              <td>" . $fila['NIT'] . "</td>
                              $servicio
                              <td><a href='http://localhost/patito/views/clientes.php?editar=". $fila['codigo'] . "'>Editar</a></td>
                              <td><a href='http://localhost/patito/views/clientes.php?borrar=". $fila['codigo'] . "'>Borrar</a></td>
                            </tr>";
                }

                $salida.="</tbody></table>";

    } else {
        $salida.= "No hay datos 😢";
    }
      echo $salida;

      $mysqli->close();
  ?>
