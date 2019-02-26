<?php

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Instalar PikAppWiFi</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 </head>
 <body>

   <div class="row">
     <div class="col-md-3"></div>
     <div class="col-md-6"><h1 class="text-center m-5"><i class="fa fa-wifi text-success" ></i>&nbsp;Instalar PikApp WiFi</h1></div>
     <div class="col-md-3"></div>
   </div>

   <div class="row">
     <div class="col-md-4"></div>
     <div class="col-md-4">
       <form action='.php' method='post' name="registro" id="registro" onsubmit="return validateForm()" >
         <div class="card">
           <div class="card-header"><h3><i class="fas fa-database text-primary"></i>&nbsp;Configurar Base de Datos</h3></div>
           <div class="card-body">
             <div class="form-group">
               <label>Servidor</label>
               <input type="text" class="form-control" name="db_server" id="db_server" autocomplete="off" placeholder="Servidor" required>
             </div>
             <div class="form-group">
               <label>Nombre Usuario</label>
               <input type="text" class="form-control" name="db_user" id="db_user" autocomplete="off" placeholder="Nombre Usuario" required>
             </div>
             <div class="form-group">
               <label>Clave Usuario</label>
               <input type="text" class="form-control" name="db_pass" id="db_pass" autocomplete="off" placeholder="Clave Usuario" required>
             </div>
             <div class="form-group">
               <label>Nombre Base de Datos</label>
               <input type="text" class="form-control" name="db_name" id="db_name" autocomplete="off" placeholder="Nombre Base de Datos" required>
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



 </body>
 </html>
