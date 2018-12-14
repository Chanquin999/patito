<?php
require '../connection.php';

$codigo = $_GET['codigo'];
$nombre = $_GET['nombre'];
$direccion = $_GET['direccion'];
$telefono = $_GET['telefono'];
$nit = $_GET['nit'];
$servicio = $_GET['servicio'];


$sql = "UPDATE  clientes
SET nombre = '$nombre',
direccion = '$direccion',
telefono = '$telefono',
NIT = '$nit',
servicio = '$servicio'
WHERE codigo = '$codigo'";

if (mysqli_query($con, $sql)) {

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