<?php
include("config.php");

session_start();
if ( $_SESSION["loggedin"] == false) {
   header('Location: login.php');
exit();
}

if( isset( $_COOKIE['reloginID'])) {
  $datos = $_COOKIE['reloginID'];
  $datosCuenta = explode(":", $datos);
  $usuarioId = $datosCuenta[1];
}
else
{
  header( "Location: login.php" );
  exit();
}


$usuarioFoto = "images/avatar.jpg";
$usuarioMail = $_SESSION["usuario"];
$conn = new mysqli($db_server, $db_user,$db_pass,$db_name,$db_serverport);
$sql = "SELECT usr_timezone FROM pawf_usr where usr_id = " . $usuarioId;
$result = $conn->query($sql);

while($row = $result->fetch_assoc())
	{$usr_timezone  = $row["usr_timezone"] . " hours";}

  $dateShow = new DateTime(date("Y-m-d H:i:s"));
  $dateShow->modify($usr_timezone);
  $dateShow = $dateShow->format('Y-m-d H:i:s');
?>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PikAppWiFi</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Favicon for this template -->
    <link rel="apple-touch-icon" sizes="57x57" href="images/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <script src="js/highcharts/highcharts.js"></script>
    <script src="js/highcharts/highcharts-more.js"></script>
    <script src="js/highcharts/solid-gauge.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
  </head>

<body class="fixed-nav" id="page-top">
  <!-- Logo -->
  <div  class="d-none d-lg-block" style="width:58px;height:100px;position:fixed;left:20px;bottom:5px;z-index:10000">
    <a class="navbar-brand" href="index.php">
      <img class="profile-img2" src="images/logoch.png" alt="CavaWiFi" >
    </a>
  </div>
  <!-- /Logo -->
  <!-- Navigation -->
  <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
    <a class="navbar-brand" href="#"><i class='fas fa-wifi text-success'></i>&nbsp PikappWiFi</a></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <!-- Dropdown -->
      <ul class="navbar-nav">
        <li class="nav-item dropdown text-left">
          <a class="nav-link dropdown-toggle small" href="#" id="navbardrop" data-toggle="dropdown"><i class='fas fa-layer-group text-primary'></i>&nbsp;Casa(3)</a>
          <div class="dropdown-menu bg-dark">
            <a href='view.php?ids=' class='dropdown-item text-white bg-dark small'><i class='fas fa-wifi text-success'></i>&nbsp;Sensor1</a>
            <a href='view.php?ids=' class='dropdown-item text-white bg-dark small'><i class='fas fa-wifi text-success'></i>&nbsp;Sensor2</a>
            <a href='view.php?ids=' class='dropdown-item text-white bg-dark small'><i class='fas fa-wifi text-success'></i>&nbsp;Sensor3</a>
            <a href="sensors.php"   class="dropdown-item text-white bg-dark small"><i class="fa fa-cogs text-warning"></i>&nbsp;Configurar</a>
          </div>
        </li>
      </ul>
      <!-- /Dropdown -->
      <!-- Dropdown -->
      <ul class="navbar-nav">
        <li class="nav-item dropdown text-left">
          <a class="nav-link dropdown-toggle small" href="#" id="navbardrop" data-toggle="dropdown"><i class='fas fa-layer-group text-primary'></i>&nbsp;Trabajo(2)</a>
          <div class="dropdown-menu bg-dark">
            <a href='view.php?ids=' class='dropdown-item text-white bg-dark small'><i class='fas fa-wifi text-success'></i>&nbsp;Sensor4</a>
            <a href='view.php?ids=' class='dropdown-item text-white bg-dark small'><i class='fas fa-wifi text-success'></i>&nbsp;Sensor5</a>
            <a href="sensors.php"   class="dropdown-item text-white bg-dark small"><i class="fa fa-cogs text-warning"></i>&nbsp;Configurar</a>
          </div>
        </li>
      </ul>
      <!-- /Dropdown -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link small" href="#"><i class="fas fa-cloud-sun text-warning fa-lg"></i>&nbsp;Neuquen - 23.6°C 48% °H - Viento E a 2.44 Km/H</a></li>
        <li class="nav-item d-none d-lg-block"><a class="nav-link" href='#'><img class="profile-img1 border border-primary" src="images/avatar.png"></a></li>
        <!-- <li class="nav-item"><a class="nav-link" href='#'>juanmaioli@gmail.com</a></li> -->
        <li class="nav-item" title="Cerrar Sesion"><a class="nav-link small" href="logout.php"><i class="fas fa-sign-out-alt text-danger"></i>Salir</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- /Navigation -->
<br><br><br>
