<?php
include("config.php");

$cl_usuario 	= $_POST['cl_usuario'];
$cl_clave     = $_POST['cl_clave'];
$cl_clave  =  hash('sha256', $cl_clave );

// $dark = "199f918678e7e48319bdbc62a3610f99";
// $cl_clave  ="Lasflores1506";
// $cl_clave  =  hash('sha256', $cl_clave );
// $cl_api  =  hash('sha256', $cl_clave );
// $cl_reset  =  hash('sha256', $cl_api );
// Reset de apikey = hash de apikey anterior
// echo strlen ($dark) ."<br>";
// echo $cl_clave ."<br>";
// echo $cl_api ."<br>";
// echo substr("$cl_api", 16, 32) ."<br>";
// echo $cl_reset ."<br>";
// echo $rest = substr("$cl_reset", 16, 32) ."<br>";




//echo $cl_clave;

if(empty($cl_usuario) || empty($cl_clave)){
header("Location: index.php");
exit();
}
$usrExiste = "";

$conn = new mysqli($servername, $username,$password,$dbname);
$cl_usuario = $conn->escape_string($cl_usuario);

$sql = "SELECT `usr_id`, `usr_email`, `usr_pass` FROM `cava_usr` WHERE `usr_email` = '" .$cl_usuario."' and `usr_pass` = '" .$cl_clave ."'";

$result = $conn->query($sql);
$usrExiste = mysqli_num_rows($result);
//echo $sql;

if($usrExiste == true )
{
  	while($row = $result->fetch_assoc())
  	{
  		$usr_email = $row["usr_email"];
      $usr_id = $row["usr_id"];
    }

    session_start();
    $_SESSION["usuario_id"] = $usr_id;
    $_SESSION["usuario"] = $usr_email;
    $_SESSION["loggedin"] = true;

    //setcookie('reloginID', $usr_email . ":".$usr_id, time()+60*60*24, '/',  $servidorName  , true, true);
    //setcookie('reloginID', hash('sha256', $usr_email )  . ":".$usr_id, time()+60*60*24, '/',  $servidorName  , true, true);
    setcookie('reloginID', hash('sha256', $usr_email )  . ":".$usr_id, time()+60*60*24, '/',  $servidorName  , false, true);
  	header('Location: index.php');
}
else
{
	 header('Location: login.php');
}

$conn->close();

?>
