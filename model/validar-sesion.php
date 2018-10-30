<?php
  session_start();
  session_destroy();
  print '<script> window.location="../views/login.php";</script>';
?>
