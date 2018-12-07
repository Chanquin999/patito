<?php
  $mysqli = new mysqli("localhost", "root", "", "cablenetpatito");
  $salida = "";
  $query = "SELECT * FROM facturacion ORDER BY numero LIMIT 20";

  if (isset($_POST['consulta'])) {
    $q = $mysqli->real_escape_string($_POST['consulta']);
    $query = "SELECT * FROM facturacion WHERE numero LIKE '%".$q."%' OR codigocliente LIKE '%".$q."%'";
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
                             </tr>";

                }
                $salida.="</tbody></table>";

    } else {
        $salida.= 'No hay datos 😢';
    }
      echo $salida;

      $mysqli->close();
  ?>
