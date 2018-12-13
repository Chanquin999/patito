<?php
  $mysqli = new mysqli("localhost", "root", "", "cablenetpatito");
  $salida = "";
  $query = "SELECT * FROM facturacion ORDER BY numero";

  if (isset($_POST['consulta'])) {
    $q = $mysqli->real_escape_string($_POST['consulta']);
    $query = "SELECT * FROM facturacion WHERE numero LIKE '%".$q."%' OR codigocliente LIKE '%".$q."%'";
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
                    <th>Editar</th>
                  </tr>
                </thead>
                <tbody>";
                while($fila = $resultado->fetch_assoc()){
                  $salida.="<tr>
                              <td>". $fila['numero'] . "</td>
                              <td>" . $fila['codigocliente'] . "</td>
                              <td>" . $fila['codigoservicio'] . "</td>
                              <td>" . $fila['monto'] . "</td>
                              <td>" . $fila['fecha'] . "</td>
                              <td>Editar</td>
                             </tr>";

                }
                $salida.="</tbody></table>";

    } else {
        $salida.= 'No hay datos 😢';
    }
      echo $salida;

      $mysqli->close();
  ?>
