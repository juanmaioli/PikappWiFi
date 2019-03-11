<?php

$errorTest = "";
  if( isset( $_GET['e'])) {
    $errorTest = "<div class='alert alert-danger mt-5' role='alert'><h3 class='text-center  mb_5'> <i class='fas fa-times-circle text-danger'></i>&nbsp;Error de conexion, revise la configuracion</h3></div>";
  }
?>

 <!DOCTYPE html>
 <html lang="es">
 <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">

   <title>Instalar PikAppWiFi</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
 </head>
 <body>

   <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
     <a class="navbar-brand" href="#"><i class='fas fa-wifi text-success'></i>&nbsp;Instalar PikApp WiFi</a>
   </nav>
   <div class="p-5">
     <?= $errorTest;?>
     <div class="row mt-5">
       <div class="col-md-4"></div>
       <div class="col-md-4">
         <form action="installdb.php" method="post" name="db_config" id="db_config">
           <div class="card">
             <div class="card-header"><h3 class="text-center"><i class="fas fa-database text-primary"></i>&nbsp;Configurar Base de Datos</h3></div>
             <div class="card-body">
               <div class="row">
                 <div class="col">
                   <label>Servidor</label>
                   <div class="input-group mb-3">
                     <div class="input-group-prepend">
                       <span class="input-group-text" id="basic-addon1"><i class="fas fa-key text-secondary"></i></span>
                     </div>
                     <input type="text" class="form-control" name="db_server" id="db_server" autocomplete="off" placeholder="Servidor" value="localhost" required>
                   </div>

                 </div>
                 <div class="col">
                   <label>Puerto</label>
                   <input type="text" class="form-control" name="db_serverport" id="db_serverport" autocomplete="off" placeholder="Puerto" value="3306" required>
                 </div>
               </div>
               <div class="form-group">
                 <label>Usuario</label>
                 <div class="input-group mb-3">
                   <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon1"><i class="fas fa-user text-secondary"></i></span>
                   </div>
                   <input type="text" class="form-control" name="db_user" id="db_user" autocomplete="off" placeholder="Nombre Usuario" required>
                 </div>
               </div>
               <div class="form-group">
                 <label>Contraseña</label>
                 <div class="input-group mb-3">
                   <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon1"><i class="fas fa-key text-secondary"></i></span>
                   </div>
                   <input type="password" class="form-control" name="db_pass" id="db_pass" autocomplete="off" placeholder="Clave Usuario">
                 </div>
               </div>
               <div class="form-group">
                 <label>Base de Datos</label>
                 <div class="input-group mb-3">
                   <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon1"><i class="fas fa-database text-secondary"></i></span>
                   </div>
                   <input type="text" class="form-control" name="db_name" id="db_name" autocomplete="off" placeholder="Nombre Base de Datos" required>
                 </div>
               </div>
               <div class="form-group">
                 <div class="form-row">
                   <div class="col">
                      <div class="card bg-danger text-white text-center p-2 m-2">Se borraran todos los datos de la DB</div>
                   </div>
                 </div>
               <div class="form-group">
                 <div class="form-row">
                   <div class="col-md-4"></div>
                   <div class="col-md-4"><button class="btn btn-primary btn-block">Guardar</button></div>
                   <div class="col-md-4"></div>
                 </div>
               </div>
             </div>
           </form>
         </div>
         <div class="col-md-4"></div>
       </div>
     </div>
 </body>
 </html>
