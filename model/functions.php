<?php

function tablaCliente($resultado)
{
  while ($persona = $resultado->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $persona['nombre'] . "</td>";
    echo "<td>" . $persona['direccion'] . "</td>";
    echo "<td>" . $persona['telefono'] . "</td>";
    echo "<td>" . $persona['NIT'] . "</td>";
    if ($persona['servicio'] == 1) {
      echo "<td>Internet</td>";
    } elseif ($persona['servicio'] == 2) {
      echo "<td>Cable</td>";
    } elseif ($persona['servicio'] == 3) {
      echo "<td>Cable e Internet</td>";
    }
    echo "<td><div class='dropdown'>
      <a class='btn btn-sm btn-icon-only text-light' href='#' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
      <i class='fas fa-ellipsis-v'></i>
      </a>
      <div class='dropdown-menu dropdown-menu-right dropdown-menu-arrow'>
        <a class='dropdown-item' href='#'>Action</a>
        <a class='dropdown-item' href='#'>Another action</a>
        <a class='dropdown-item' href='#'>Something else here</a>
      </div>
    </div></td>";
    echo "</tr>";
  }
}

?>
