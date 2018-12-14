<?php
require ('connection.php');
$sql = "SELECT usuario, password FROM usuarios WHERE id = 2";

$resultado = mysqli_query($con, $sql);

while($fila = $resultado->fetch_assoc()){
  $validoUser = $fila['usuario'];
  $validoPass = $fila['password'];


  session_start();
  $usuario = $_POST['usuario'];
  $contrasena = $_POST['contrasena'];

  if (isset($usuario) && isset($contrasena)) {

    if ($usuario == $fila['usuario'] && $contrasena == $fila['password']) {
      echo "
      <script type='text/javascript'>
      window.location='http://localhost/patito/clientes/'
      </script>
      ";
      $_SESSION['usuario'] = $usuario;
    } else {
      print ('Datos Incorrectos<div></div>');
      print ("<a href='http://localhost/patito/login.php'>Regresar</a>");
    }
  }
}
?>
