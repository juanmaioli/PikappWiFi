<?php
  session_start();
  unset ($_SESSION["usuario"]);
  unset ($_SESSION["loggedin"]);
  unset ($_SESSION["usuario_id"]);
  session_destroy();
  //setcookie('reloginID', "<->", time()+60*60*24, '/',  $servidorName  , false, true);
  unset($_COOKIE['reloginID']);
  //setcookie("reloginID", "-", time() - 60*60*24);
  //setcookie('reloginID', "<->", time()+60*60*24, '/',  $servidorName  , true, true);
  header('Location: login.php');
?>
