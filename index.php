<?php
session_start();
if ($_SESSION['usuario'] == 'Super Pato') {  
} else {
  echo "
        <script type='text/javascript'>
        window.location='http://localhost/patito/login.php'
        </script>
        ";
}

?>
<body>
<script type="text/javascript">
window.location="http://localhost/patito/clientes";
</script>
</body>