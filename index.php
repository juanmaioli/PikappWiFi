<?php include("head.php");?>
<style media="screen">
.card{height: 300px;min-width: 320px;}
</style>
<script type="text/javascript" src="js/gauge.js"></script>
<!-- Container -->

<div class="row m-2">
  <div class="col text-center  mb-4">
    <div class="card">
      <div class="card-header"><i class="fas fa-map-marker-alt text-primary"></i> Ciudad: <a href="weather.php">Neuquen</a></div>
      <div class="card-body text-center">
        <span id="w_icon"><i class='fas fa-cloud-sun text-warning fa-5x'></i>&nbsp</span>
        <h6 class="text-center mt-2"><span id="w_desc">Despejado</span></h6>
        <h3 class="text-center"><span id="w_temp">23.6</span> &deg;C - <span id="w_humedad">48</span> %H</h3>
      </div>
      <div class="card-footer small text-muted"><i class="fa fa-calendar"></i>&nbsp;Act.: <span id="w_fecha">2019-03-01 12:25:47</span></div>
    </div>
  </div>

	  <div class='col text-center mb-4'>
	    <div class='card'>
	      <div class='card-header'><i class='fa fa-wifi text-success'></i> &nbsp;Dispositivo <a href='view.php?ids=1'>Servidor (Un Sensor)</a></div>
	      <div class='card-body' style='width:100%;margin-left:auto;margin-right:auto;'><canvas id='gauge1' width='240' height='140' >Not supported/No soportado.</canvas></div>
	      <div class='card-footer small text-muted'><i class='fa fa-calendar'></i>&nbsp;Act.: <span id='fecha1'>2019-03-01 12:25:47</span></div>
	    </div>
	  </div>
    <div class='col text-center mb-4'>
      <div class='card'>
        <div class='card-header'><i class='fa fa-wifi text-success'></i> &nbsp;Dispositivo <a href='view.php?ids=1'>Servidor (Un Sensor)</a></div>
        <div class='card-body' style='width:100%;margin-left:auto;margin-right:auto;'><canvas id='gauge2' width='240' height='140' >Not supported/No soportado.</canvas></div>
        <div class='card-footer small text-muted'><i class='fa fa-calendar'></i>&nbsp;Act.: <span id='fecha1'>2019-03-01 12:25:47</span></div>
      </div>
    </div>
    <div class='col text-center mb-4'>
      <div class='card'>
        <div class='card-header'><i class='fa fa-wifi text-success'></i> &nbsp;Dispositivo <a href='view.php?ids=1'>Servidor (Un Sensor)</a></div>
        <div class='card-body' style='width:100%;margin-left:auto;margin-right:auto;'><canvas id='gauge3' width='240' height='140' >Not supported/No soportado.</canvas></div>
        <div class='card-footer small text-muted'><i class='fa fa-calendar'></i>&nbsp;Act.: <span id='fecha1'>2019-03-01 12:25:47</span></div>
      </div>
    </div>
    <div class='col text-center mb-4'>
      <div class='card'>
        <div class='card-header'><i class='fa fa-wifi text-success'></i> &nbsp;Dispositivo <a href='view.php?ids=1'>Servidor (Un Sensor)</a></div>
        <div class='card-body' style='width:100%;margin-left:auto;margin-right:auto;'><canvas id='gauge4' width='240' height='140' >Not supported/No soportado.</canvas></div>
        <div class='card-footer small text-muted'><i class='fa fa-calendar'></i>&nbsp;Act.: <span id='fecha1'>2019-03-01 12:25:47</span></div>
      </div>
    </div>
    <div class='col text-center mb-4'>
      <div class='card'>
        <div class='card-header'><i class='fa fa-wifi text-success'></i> &nbsp;Dispositivo <a href='view.php?ids=1'>Servidor (Un Sensor)</a></div>
        <div class='card-body' style='width:100%;margin-left:auto;margin-right:auto;'><canvas id='gauge5' width='240' height='140' >Not supported/No soportado.</canvas></div>
        <div class='card-footer small text-muted'><i class='fa fa-calendar'></i>&nbsp;Act.: <span id='fecha1'>2019-03-01 12:25:47</span></div>
      </div>
    </div>
    <div class='col text-center mb-4'>
      <div class='card'>
        <div class='card-header'><i class='fa fa-wifi text-success'></i> &nbsp;Dispositivo <a href='view.php?ids=1'>Servidor (Un Sensor)</a></div>
        <div class='card-body' style='width:100%;margin-left:auto;margin-right:auto;'><canvas id='gauge6' width='240' height='140' >Not supported/No soportado.</canvas></div>
        <div class='card-footer small text-muted'><i class='fa fa-calendar'></i>&nbsp;Act.: <span id='fecha1'>2019-03-01 12:25:47</span></div>
      </div>
    </div>
    <div class='col text-center mb-4'>
      <div class='card'>
        <div class='card-header'><i class='fa fa-wifi text-success'></i> &nbsp;Dispositivo <a href='view.php?ids=1'>Servidor (Un Sensor)</a></div>
        <div class='card-body' style='width:100%;margin-left:auto;margin-right:auto;'><canvas id='gauge7' width='240' height='140' >Not supported/No soportado.</canvas></div>
        <div class='card-footer small text-muted'><i class='fa fa-calendar'></i>&nbsp;Act.: <span id='fecha1'>2019-03-01 12:25:47</span></div>
      </div>
    </div>
    <div class='col text-center mb-4'>
      <div class='card'>
        <div class='card-header'><i class='fa fa-wifi text-success'></i> &nbsp;Dispositivo <a href='view.php?ids=1'>Servidor (Un Sensor)</a></div>
        <div class='card-body' style='width:100%;margin-left:auto;margin-right:auto;'><canvas id='gauge8' width='240' height='140' >Not supported/No soportado.</canvas></div>
        <div class='card-footer small text-muted'><i class='fa fa-calendar'></i>&nbsp;Act.: <span id='fecha1'>2019-03-01 12:25:47</span></div>
      </div>
    </div>
</div>

</div>
<script type="text/javascript">
    gaugeDraw("gauge1",Math.floor((Math.random() * 50) - 10));
    gaugeDraw("gauge2",Math.floor((Math.random() * 50) - 10));
    gaugeDraw("gauge3",Math.floor((Math.random() * 50) - 10));
    gaugeDraw2("gauge4",Math.floor((Math.random() * 100) - 10));
    gaugeDraw("gauge5",Math.floor((Math.random() * 50) - 10));
    gaugeDraw("gauge6",Math.floor((Math.random() * 50) - 10));
    gaugeDraw("gauge7",Math.floor((Math.random() * 50) - 10));
    gaugeDraw("gauge8",Math.floor((Math.random() * 50) - 10));

  var myReload = setInterval(dataReload, 10000);

  function dataReload (){
    gaugeDraw("gauge1",Math.floor((Math.random() * 50) - 10));
    gaugeDraw("gauge2",Math.floor((Math.random() * 50) - 10));
    gaugeDraw("gauge3",Math.floor((Math.random() * 50) - 10));
    gaugeDraw2("gauge4",Math.floor((Math.random() * 100)));
    gaugeDraw("gauge5",Math.floor((Math.random() * 50) - 10));
    gaugeDraw("gauge6",Math.floor((Math.random() * 50) - 10));
    gaugeDraw("gauge7",Math.floor((Math.random() * 50) - 10));
    gaugeDraw("gauge8",Math.floor((Math.random() * 50) - 10));

  }
</script>
<!-- /Container -->


<?php include("footer.php"); ?>
