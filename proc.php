<?php
include("config.php");

$usr_email	= $_POST['usr_email'];
$usr_passwd = $_POST['usr_passwd'];
$usr_passwd =  hash('sha256', $usr_passwd );

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

if(empty($usr_email) || empty($usr_passwd)){
header("Location: index.php");
exit();
}
$usrExiste = "";

$conn = new mysqli($db_server, $db_user,$db_pass,$db_name,$db_serverport);
$usr_email = $conn->escape_string($usr_email);

$sql = "SELECT `usr_id`, `usr_email`, `usr_pass` FROM `pawf_usr` WHERE `usr_email` = '" . $usr_email ."' and `usr_pass` = '" . $usr_passwd ."'";

$result = $conn->query($sql);
$usrExiste = mysqli_num_rows($result);
// echo $sql . "<br>";
// echo $usrExiste;
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

    if ($www_https == "on") {
      //echo "con https";
      setcookie('reloginID', hash('sha256', $usr_email )  . ":".$usr_id, time()+60*60*24, '/',  $servidorName  , true, true);
    }else {
      //echo "sin https";
      setcookie('reloginID', hash('sha256', $usr_email )  . ":".$usr_id, time()+60*60*24, '/',  $www_host  , false, true);
    }


    //setcookie('reloginID', $usr_email . ":".$usr_id, time()+60*60*24, '/',  $servidorName  , true, true);
    //setcookie('reloginID', hash('sha256', $usr_email )  . ":".$usr_id, time()+60*60*24, '/',  $servidorName  , true, true);
    //setcookie('reloginID', hash('sha256', $usr_email )  . ":".$usr_id, time()+60*60*24, '/',  $www_host  , false, true);
  	header('Location: index.php');
    echo "ok";
}
else
{
	 header('Location: login.php');
   //echo "not ok";
}

$conn->close();

?>
