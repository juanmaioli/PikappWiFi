<?php
unset($_COOKIE['reloginID']);
//setcookie("reloginID", "-", time() - 3600);
 ?>

<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8">
  <title>PikAppWiFi</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">

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

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <style>
  body {background-image: url("https://source.unsplash.com/1920x1080/?nature");background-position: center center;background-repeat: no-repeat;background-attachment: fixed;background-size: cover;background-color:#a31b0f;}
  @media (max-width: 768px) {
    #sidebar {margin-left: -200px;}
    #sidebar.active {margin-left: 0;}
    #sidebarCollapse span {display: none;}
  }
  fieldset {background-color:#fff;border: 3px solid #eee; !important;padding: 1.4em 1.4em 1.4em 1.4em !important;margin: 0 0 1.5em 0 !important;-webkit-border-radius: 15px;-moz-border-radius: 15px;border-radius: 15px;}
  </style>
</head>
<body>
<div class="container">
    <div class="row h-100">
        <div class="col-md-4 mx-auto my-auto">
          <fieldset>
                <div class="text-center">
                  <img class="img-fluid" src="images/logoch.png" width="125px" alt="">
                </div>
                <form class="form-signin" ACTION="proc.php" name="form1" method="POST">
	                <input name="usr_email" type="text" id="usr_email" class="form-control mt-3" placeholder="Email" required autofocus>
	                <input name="usr_passwd" type="password" id="usr_passwd" class="form-control mt-3" placeholder="Contrase&ntilde;a" required>
	                <input name="formSubmit" type="hidden" id="formSubmit" value="yes">
	                <button class="btn btn-primary btn-block mt-3" type="submit">Ingresar</button>
									<a href='recuperar.php' align='center' ><br><center>Recuperar Clave</a><br />
                </form>
            </fieldset>
            </div>
        </div>
    </div>
</body>
</html>
