

<?php
require '../connection.php';

    $codigo_cliente = $_POST['codigo_cliente'];
    $fecha_factura = $_POST['fecha_factura'];
    $servicio_factura = $_POST['servicio_factura'];
    $monto_factura = $_POST['monto_factura'];


  $sql = "INSERT INTO facturacion (numero, codigocliente, fecha, codigoservicio, monto)
  VALUES (NULL, '$codigo_cliente', '$fecha_factura', '$servicio_factura', '$monto_factura')";

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
        window.location="http://localhost/patito/facturas/";
        </script>
        </body>
        </html>

