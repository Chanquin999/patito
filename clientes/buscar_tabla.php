<?php
  $mysqli = new mysqli("localhost", "root", "", "cablenetpatito");
  $salida = "";
  $query = "SELECT * FROM clientes ORDER BY codigo";

  if (isset($_POST['consulta'])) {
$q = $mysqli->real_escape_string($_POST['consulta']);
    $query = "SELECT codigo, nombre, direccion, telefono, NIT, servicio FROM clientes WHERE nombre LIKE '%".$q."%' OR codigo LIKE '%".$q."%'";    
  }
    $resultado = $mysqli->query($query);


    if($resultado->num_rows > 0){
      $salida.="<table class='table'>
                <thead>
                  <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>NIT</th>
                    <th>Servicio</th>
                    <th>Editar</th>
                    <th>Facturar</th>
                  </tr>
                </thead>
                <tbody>";
                while($fila = $resultado->fetch_assoc()){
                  if ($fila['servicio'] == 1) {
                    $servicio = "Internet";
                  } elseif ($fila['servicio'] == 2) {
                    $servicio = "Cable";
                  } elseif ($fila['servicio'] == 3) {
                    $servicio = 'Cable e Internet';
                  }
                  $salida.="<tr>
                              <td><input id='editar_campo' type='text' class='form-control form-control-alternative' disabled value='". $fila['codigo'] . "'></td>
                              <td><input type='text' class='form-control form-control-alternative' disabled value='" . $fila['nombre'] . "'></td>
                              <td><input type='text' class='form-control form-control-alternative' disabled value='" . $fila['direccion'] . "'></td>
                              <td><input type='text' class='form-control form-control-alternative' disabled value='" . $fila['telefono'] . "'></td>
                              <td><input type='text' class='form-control form-control-alternative' disabled value='" . $fila['NIT'] . "'></td>
                              <td><input type='text' class='form-control form-control-alternative' disabled value='" . $servicio . "'></td>
                              <td><button onclick='editar()' type='button' class='btn btn-primary' data-toggle='modal' data-target='#Editar'>Editar</button></td>
                              <td><button type='button' class='btn btn-default' data-target='#Facturar'>Facturar</button></td>
                            </tr>";
                }

                $salida.="</tbody></table>";

    } else {
        $salida.= "No hay datos 😢";
    }
      echo $salida;

      $mysqli->close();
  ?>
