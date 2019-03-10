<?php
ob_start();
  $db_server = $_POST['db_server'];
  $db_user   = $_POST['db_user'];
  $db_pass   = $_POST['db_pass'];
  $db_name   = $_POST['db_name'];
  $db_serverport = $_POST['db_serverport'];
  $www_host = $_SERVER['HTTP_HOST'];
  $mysqli = new mysqli($db_server, $db_user, $db_pass , $db_name,$db_serverport);

  /* comprobar la conexión */
  if ($mysqli->connect_errno) {
    header( "Location: install.php?e=1" );
    exit();
  }

  /* comprobar si el servidor sigue vivo */
  if ($mysqli->ping()) {
    $errorTest = "Conexion Establecida con la DB";
    creaConfig();
    creaTables();
  } else {
    header( "Location: install.php?e=1" );
    exit();
  }

  /* cerrar la conexión */
  $mysqli->close();

function creaConfig(){
  $nombre_archivo = "config.php";
  $mensaje = "<?php\n" . chr(9) . chr(36) . "db_server" . " = " . chr(34) . $GLOBALS['db_server'] . chr(34) .";\n";
  $mensaje = $mensaje . chr(9) . chr(36) . "db_user" . " = " . chr(34) . $GLOBALS['db_user'] . chr(34) .";\n";
  $mensaje = $mensaje . chr(9) . chr(36) . "db_pass" . " = " . chr(34) . $GLOBALS['db_pass'] . chr(34) .";\n";
  $mensaje = $mensaje . chr(9) . chr(36) . "db_name" . " = " . chr(34) . $GLOBALS['db_name'] . chr(34) .";\n";
  $mensaje = $mensaje . chr(9) . chr(36) . "db_serverport" . " = " . chr(34) . $GLOBALS['db_serverport'] . chr(34) .";\n";
  $mensaje = $mensaje . chr(9) . chr(36) . "www_host" . " = " . chr(34) . $GLOBALS['www_host'] . chr(34) .";\n?>";

  if(file_exists($nombre_archivo))
  {unlink($nombre_archivo);}

  if($archivo = fopen($nombre_archivo, "a"))
  {
    fwrite($archivo, $mensaje);
    fclose($archivo);
  }
}


function creaTables(){
    $conndb = new mysqli($GLOBALS['db_server'],$GLOBALS['db_user'],$GLOBALS['db_pass'],$GLOBALS['db_name'],$GLOBALS['db_serverport']);

    $sql = "DROP TABLE IF EXISTS pawf_data;";
    $result = $conndb->query($sql);
    $sql = "DROP TABLE IF EXISTS pawf_group;";
    $result = $conndb->query($sql);
    $sql = "DROP TABLE IF EXISTS pawf_sensor;";
    $result = $conndb->query($sql);
    $sql = "DROP TABLE IF EXISTS pawf_subsensor;";
    $result = $conndb->query($sql);
    $sql = "DROP TABLE IF EXISTS pawf_type;";
    $result = $conndb->query($sql);
    $sql = "DROP TABLE IF EXISTS pawf_unity;";
    $result = $conndb->query($sql);
    $sql = "DROP TABLE IF EXISTS pawf_usr;";
    $result = $conndb->query($sql);
    $sql = "DROP TABLE IF EXISTS pawf_weather_1";
    $result = $conndb->query($sql);
    $sql = "DROP TABLE IF EXISTS pawf_weather_2";
    $result = $conndb->query($sql);
    $sql = "DROP TABLE IF EXISTS pawf_weather_3";
    $result = $conndb->query($sql);

    $sql = "CREATE TABLE pawf_data (data_id int(11) NOT NULL AUTO_INCREMENT,data_serial int(11) NOT NULL DEFAULT 0,data_date datetime(0) NOT NULL,data_sensor1 float NOT NULL DEFAULT 0,
            data_sensor2 float NOT NULL DEFAULT 0, PRIMARY KEY (data_id) USING BTREE) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_spanish2_ci ROW_FORMAT = Compact;";
    $result = $conndb->query($sql);
    $sql = "CREATE TABLE pawf_group (group_id int(11) NOT NULL AUTO_INCREMENT,group_name varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,group_owner int(255) NULL DEFAULT NULL,
            PRIMARY KEY (group_id) USING BTREE) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_spanish2_ci ROW_FORMAT = Compact;";
    $result = $conndb->query($sql);
    $sql = "CREATE TABLE pawf_sensor  (sensor_id int(11) NOT NULL AUTO_INCREMENT,sensor_usr int(11) NOT NULL,sensor_serial varchar(18) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,sensor_name varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
            sensor_type int(11) NULL DEFAULT NULL,sensor_group int(11) NULL DEFAULT NULL,sensor_cant int(11) NULL DEFAULT NULL,sensor_unity_1 int(11) NULL DEFAULT NULL,sensor_unity_2 int(11) NULL DEFAULT NULL,
            sensor_u1_min float NOT NULL DEFAULT 0,sensor_ip varchar(17) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT '0',PRIMARY KEY (sensor_id) USING BTREE) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_spanish2_ci ROW_FORMAT = Compact;";
    $result = $conndb->query($sql);
    $sql = "CREATE TABLE pawf_subsensor (subsensor_id int(11) NOT NULL AUTO_INCREMENT,subsensor_father int(11) NULL DEFAULT NULL,subsensor_name varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
            subsensor_unity int(11) NULL DEFAULT NULL,subsensor_order int(11) NULL DEFAULT NULL,PRIMARY KEY (subsensor_id) USING BTREE) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_spanish2_ci ROW_FORMAT = Compact;";
    $result = $conndb->query($sql);
    $sql = "CREATE TABLE pawf_type (type_id int(11) NOT NULL AUTO_INCREMENT,type_name varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,type_desc varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
    PRIMARY KEY (type_id) USING BTREE) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_spanish2_ci ROW_FORMAT = Compact;";
    $result = $conndb->query($sql);
    $sql = "CREATE TABLE pawf_unity  (unity_id int(11) NOT NULL AUTO_INCREMENT,unity_name varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
            unity_symbol varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,unity_rango varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL DEFAULT 'min: -50,max: 50',
            PRIMARY KEY (unity_id) USING BTREE) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_spanish2_ci ROW_FORMAT = Compact;";
    $result = $conndb->query($sql);
    $sql = "CREATE TABLE pawf_usr  (usr_id int(11) NOT NULL AUTO_INCREMENT,usr_name varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
            usr_lastname varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,usr_email varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,usr_image varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
            usr_pass varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,usr_token varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
            PRIMARY KEY (usr_id) USING BTREE, UNIQUE KEY usr_email (usr_email)) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_spanish2_ci ROW_FORMAT = Compact;";
    $result = $conndb->query($sql);
    $sql = "CREATE TABLE pawf_weather_1  (
            w_id int(11) NOT NULL AUTO_INCREMENT,w_report datetime(0) NULL DEFAULT NULL,w_date datetime(0) NULL DEFAULT NULL,
            w_temp float(6, 2) NULL DEFAULT 0.00,w_temp_st float(6, 2) NULL DEFAULT 0.00,w_humedad float(6, 2) NULL DEFAULT 0.00,
            w_wind float(6, 2) NULL DEFAULT 0.00,w_dir varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
            w_rafagas float(6, 2) NULL DEFAULT 0.00,w_pressure float(10, 2) NULL DEFAULT NULL,
            w_desc varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
            w_icon varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
            w_visibility int(255) NULL DEFAULT NULL,w_city varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
            w_cloud int(255) NULL DEFAULT 0,w_prpInt float(6, 2) NULL DEFAULT 0.00,w_prpprop double(6, 2) NULL DEFAULT 0.00,
            w_puntorocio float(6, 2) NULL DEFAULT 0.00,w_uvindex int(11) NULL DEFAULT 0,
            w_ozono float(6, 2) NULL DEFAULT 0.00,PRIMARY KEY (w_id) USING BTREE) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_spanish2_ci ROW_FORMAT = Compact;";
    $result = $conndb->query($sql);
    $sql = "CREATE TABLE pawf_weather_2  (
            w_id int(11) NOT NULL AUTO_INCREMENT,w_report datetime(0) NULL DEFAULT NULL,w_date datetime(0) NULL DEFAULT NULL,
            w_temp float(6, 2) NULL DEFAULT 0.00,w_temp_st float(6, 2) NULL DEFAULT 0.00,w_humedad float(6, 2) NULL DEFAULT 0.00,
            w_wind float(6, 2) NULL DEFAULT 0.00,w_dir varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
            w_rafagas float(6, 2) NULL DEFAULT 0.00,w_pressure float(10, 2) NULL DEFAULT NULL,
            w_desc varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
            w_icon varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
            w_visibility int(255) NULL DEFAULT NULL,w_city varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
            w_cloud int(255) NULL DEFAULT 0,w_prpInt float(6, 2) NULL DEFAULT 0.00,w_prpprop double(6, 2) NULL DEFAULT 0.00,
            w_puntorocio float(6, 2) NULL DEFAULT 0.00,w_uvindex int(11) NULL DEFAULT 0,
            w_ozono float(6, 2) NULL DEFAULT 0.00,PRIMARY KEY (w_id) USING BTREE) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_spanish2_ci ROW_FORMAT = Compact;";
    $result = $conndb->query($sql);
    $sql = "CREATE TABLE pawf_weather_3  (
            w_id int(11) NOT NULL AUTO_INCREMENT,w_report datetime(0) NULL DEFAULT NULL,w_date datetime(0) NULL DEFAULT NULL,
            w_temp float(6, 2) NULL DEFAULT 0.00,w_temp_st float(6, 2) NULL DEFAULT 0.00,w_humedad float(6, 2) NULL DEFAULT 0.00,
            w_wind float(6, 2) NULL DEFAULT 0.00,w_dir varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
            w_rafagas float(6, 2) NULL DEFAULT 0.00,w_pressure float(10, 2) NULL DEFAULT NULL,
            w_desc varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
            w_icon varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
            w_visibility int(255) NULL DEFAULT NULL,w_city varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NULL DEFAULT NULL,
            w_cloud int(255) NULL DEFAULT 0,w_prpInt float(6, 2) NULL DEFAULT 0.00,w_prpprop double(6, 2) NULL DEFAULT 0.00,
            w_puntorocio float(6, 2) NULL DEFAULT 0.00,w_uvindex int(11) NULL DEFAULT 0,
            w_ozono float(6, 2) NULL DEFAULT 0.00,PRIMARY KEY (w_id) USING BTREE) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_spanish2_ci ROW_FORMAT = Compact;";
    $result = $conndb->query($sql);
    $conndb->close();
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
     <div class='alert alert-success mt-5' role='alert'><h3 class='text-center mb_5 text-secondary'> <i class='fas fa-times-circle'></i>&nbsp;<?= $errorTest;?></h3></div>

     <div class="row">
       <div class="col-md-4"></div>
       <div class="col-md-4">
         <form action="iinstallend.php" method="post" name="db_config" id="db_config">
           <div class="card">
             <div class="card-header"><h3 class="text-center"><i class="fas fa-user text-primary"></i>&nbsp;Agregar Usuario</h3></div>
             <div class="card-body">
               <div class="form-group">
                 <label>Email</label>
                 <div class="input-group mb-3">
                   <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope text-secondary"></i></span>
                   </div>
                   <input type="text" class="form-control" name="usr_name" id="usr_name" autocomplete="off" placeholder="Email" required>
                 </div>
               </div>
               <div class="form-group">
                 <label>Contraseña Usuario</label>
                 <div class="input-group mb-3">
                   <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon1"><i class="fas fa-key text-secondary"></i></span>
                   </div>
                   <input type="password" class="form-control" name="user_pass" id="user_pass" autocomplete="off" placeholder="Nombre Usuario" required>
                 </div>
               </div>
               <div class="form-group">
                 <label>Repetir Contraseña Usuario</label>
                 <div class="input-group mb-3">
                   <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon1"><i class="fas fa-key text-secondary"></i></span>
                   </div>
                   <input type="password" class="form-control" name="user_passrep" id="user_passrep" autocomplete="off" placeholder="Clave Usuario">
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
