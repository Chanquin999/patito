<?php
$id = $_POST['id'];

include('connection.php');
$query = "DELETE FROM clientes WHERE clientes.codigo = '$id'";
$result = mysqli_query($con, $query);

if ($result) {
  print "Se ha elimindado";
} else {
  print "NO Se ha elimindado";
}

echo "
<p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p>
";
?>
