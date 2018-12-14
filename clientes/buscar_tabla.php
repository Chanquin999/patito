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
      $salida.="<form method='GET' id='formEditar'>
      <table class='table'>
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
                  if ($fila['servicio'] == 2) {
                    $servicio = "Internet";
                  } elseif ($fila['servicio'] == 1) {
                    $servicio = "Cable";
                  } elseif ($fila['servicio'] == 3) {
                    $servicio = 'Cable e Internet';
                  }
                  $salida.="
                              <tr>
                              
                                <td><input name='codigo' id='editar_codigo_". $fila['codigo'] ."' type='text' class='form-control form-control-alternative' disabled value='". $fila['codigo'] . "'></td>
                                <td><input name='nombre' id='editar_nombre_". $fila['codigo'] ."' type='text' class='form-control form-control-alternative' disabled value='" . $fila['nombre'] . "'></td>
                                <td><input name='direccion' id='editar_direccion_". $fila['codigo'] ."' type='text' class='form-control form-control-alternative' disabled value='" . $fila['direccion'] . "'></td>
                                <td><input name='telefono' id='editar_telefono_". $fila['codigo'] ."' type='text' class='form-control form-control-alternative' disabled value='" . $fila['telefono'] . "'></td>
                                <td><input name='nit' id='editar_nit_". $fila['codigo'] ."' type='text' class='form-control form-control-alternative' disabled value='" . $fila['NIT'] . "'></td>
                                <td><input name='servicio' id='editar_servicio_". $fila['codigo'] ."' type='number' class='form-control form-control-alternative' disabled value='" . $fila['servicio'] . "' min='1' max='3' title='Cable: 1, Internet: 2, Cable e Internet: 3'></td>
                                <td><input id='boton_". $fila['codigo'] ."' onclick=" . "editar('". $fila['codigo'] ."')" ." type='button' class='btn btn-primary' value='Editar'></td>
                                <td><button type='button' onclick=" . "poner('". $fila['codigo'] ."')" ." class='btn btn-default' data-toggle='modal' data-target='#nuevaFactura' name='codigoBoton' >Facturar</button></td>
                              
                              </tr>
                            ";
                }

                $salida.="</tbody></table></form>";

    } else {
        $salida.= "No hay datos 😢";
    }
      echo $salida;

      $mysqli->close();
  ?>
