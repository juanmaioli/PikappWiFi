<?php
$usr_name = $_POST['usr_name'];
$user_pass   = $_POST['user_pass'];
$user_passrep   = $_POST['user_passrep'];

$user_pass  =  hash('sha256', $user_pass  );
$user_token   =  hash('sha256', $user_pass  );
$user_token   = substr($user_token , 16, 32);

$user_img = "img/avatar.png";
$nombre_archivo = "config.php";

if(file_exists($nombre_archivo))
{include("config.php");} else {
  header( "Location: install.php?e=1" );
}

$sql = "INSERT INTO  pawf_usr (usr_email,usr_image,usr_pass,usr_token) VALUES ('" . $usr_name . "','" . $user_img . "', '" . $user_pass . "','" . $user_token . "')";
$conndb = new mysqli($GLOBALS['db_server'],$GLOBALS['db_user'],$GLOBALS['db_pass'],$GLOBALS['db_name'],$GLOBALS['db_serverport']);
$result = $conndb->query($sql);
$conndb->close();
header( "Location: login.php" );
?>
