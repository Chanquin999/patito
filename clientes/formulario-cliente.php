<?php
require '../connection.php';

$nombre_cliente = $_POST['nombre_cliente'];
$direccion_cliente = $_POST['direccion_cliente'];
$telefono_cliente = $_POST['telefono_cliente'];
$nit_cliente = $_POST['nit_cliente'];
$servicio_cliente = $_POST['servicio_cliente'];


$sql = "INSERT INTO clientes (nombre, direccion, telefono, NIT, servicio)
VALUES ('$nombre_cliente', '$direccion_cliente', '$telefono_cliente', '$nit_cliente', '$servicio_cliente')";
if (mysqli_query($con, $sql)) {
    print('funciono');

} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
        mysqli_close($con);
        ?>
        <html>
        <body>
        <script type="text/javascript">
        window.location="http://localhost/patito/clientes/";
        </script>
        </body>
        </html>
