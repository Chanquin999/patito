<?php
session_start();
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

if (isset($usuario) && isset($contrasena)) {
    
    if ($usuario == 'Super Pato' && $contrasena == 999) {
        echo "
        <script type='text/javascript'>
        window.location='http://localhost/patito/clientes/'
        </script>
        ";
        $_SESSION['usuario'] = $usuario;
    } else {
        print ('Mal');
    }
}
?>