<?php
function mesMostrar() {
	if (date("m") == 1 ) {$mesMostrar = "Enero";}
	if (date("m") == 2 ) {$mesMostrar = "Febrero";}
	if (date("m") == 3 ) {$mesMostrar = "Marzo";}
	if (date("m") == 4 ) {$mesMostrar = "Abril";}
	if (date("m") == 5 ) {$mesMostrar = "Mayo";}
	if (date("m") == 6 ) {$mesMostrar = "Junio";}
	if (date("m") == 7 ) {$mesMostrar = "Julio";}
	if (date("m") == 8 ) {$mesMostrar = "Agosto";}
	if (date("m") == 9 ) {$mesMostrar = "Septiembre";}
	if (date("m") == 10 ) {$mesMostrar = "Octubre";}
	if (date("m") == 11 ) {$mesMostrar = "Noviembre";}
	if (date("m") == 12 ) {$mesMostrar = "Diciembre";}
	return $mesMostrar;
 }

function iconoClima($w_icon){
	if($w_icon == "01d.png" ){ $w_iconMostrar = "<i class='far fa-sun text-warning fa-5x' alt='Soleado'></i>&nbsp";}
	if($w_icon == "01n.png" ){ $w_iconMostrar = "<i class='far fa-moon text-info fa-5x'></i>&nbsp";}
	if($w_icon == "02d.png" ){ $w_iconMostrar = "<i class='fas fa-cloud-sun text-warning fa-5x'></i>&nbsp";}
	if($w_icon == "02n.png" ){ $w_iconMostrar = "<i class='fas fa-cloud-moon text-info fa-5x'></i>&nbsp";}
	if($w_icon == "03d.png" ){ $w_iconMostrar = "<i class='fas fa-cloud text-info fa-5x'></i>&nbsp";}
	if($w_icon == "03n.png" ){ $w_iconMostrar = "<i class='fas fa-cloud text-info fa-5x'></i>&nbsp";}
	if($w_icon == "04d.png" ){ $w_iconMostrar = "<i class='fas fa-cloud text-info fa-5x'></i>&nbsp";}
	if($w_icon == "04n.png" ){ $w_iconMostrar = "<i class='fas fa-cloud text-info fa-5x'></i>&nbsp";}
	if($w_icon == "09d.png" ){ $w_iconMostrar = "<i class='fas fa-cloud-rain text-info fa-5x'></i>&nbsp";}
	if($w_icon == "09n.png" ){ $w_iconMostrar = "<i class='fas fa-cloud-rain text-info fa-5x'></i>&nbsp";}
	if($w_icon == "10d.png" ){ $w_iconMostrar = "<i class='fas fa-cloud-sun-rain text-info fa-5x'></i>&nbsp";}
	if($w_icon == "10n.png" ){ $w_iconMostrar = "<i class='fas fa-cloud-moon-rain text-info fa-5x'></i>&nbsp";}
	if($w_icon == "11d.png" ){ $w_iconMostrar = "<i class='fas fa-bolt text-warning fa-5x'></i>&nbsp";}
	if($w_icon == "11n.png" ){ $w_iconMostrar = "<i class='fas fa-bolt text-warning fa-5x'></i>&nbsp";}
	if($w_icon == "13d.png" ){ $w_iconMostrar = "<i class='far fa-snowflake text-primary fa-5x'></i>&nbsp";}
	if($w_icon == "13n.png" ){ $w_iconMostrar = "<i class='far fa-snowflake text-primary fa-5x'></i>&nbsp";}
	if($w_icon == "50d.png" ){ $w_iconMostrar = "<i class='fas fa-smog text-white fa-5x'></i>&nbsp";}
	if($w_icon == "50n.png" ){ $w_iconMostrar = "<i class='fas fa-smog text-white fa-5x'></i>&nbsp";}

	if($w_icon == "clear-day" ){ $w_iconMostrar = "<i class='far fa-sun text-warning fa-5x' alt='Soleado'></i>&nbsp";}
	if($w_icon == "clear-night" ){ $w_iconMostrar = "<i class='far fa-moon text-info fa-5x'></i>&nbsp";}
	if($w_icon == "rain" ){ $w_iconMostrar = "<i class='fas fa-cloud-rain text-info fa-5x'></i>&nbsp";}
	if($w_icon == "snow" ){ $w_iconMostrar = "<i class='far fa-snowflake text-primary fa-5x'></i>&nbsp";}
	if($w_icon == "sleet" ){ $w_iconMostrar = "<i class='far fa-snowflake text-primary fa-5x'></i>&nbsp";}
	if($w_icon == "wind" ){ $w_iconMostrar = "<i class='fas fa-wind text-primary fa-5x'></i>&nbsp";}
	if($w_icon == "fog" ){ $w_iconMostrar = "<i class='fas fa-smog text-white fa-5x'></i>&nbsp";}
	if($w_icon == "cloudy" ){ $w_iconMostrar = "<i class='fas fa-cloud text-info fa-5x'></i>&nbsp";}
	if($w_icon == "partly-cloudy-d" ){ $w_iconMostrar = "<i class='fas fa-cloud-sun text-warning fa-5x'></i>&nbsp";}
	if($w_icon == "partly-cloudy-n" ){ $w_iconMostrar = "<i class='fas fa-cloud-moon text-info fa-5x'></i>&nbsp";}
	if($w_icon == "partly-cloudy-day" ){ $w_iconMostrar = "<i class='fas fa-cloud-sun text-warning fa-lg'></i>&nbsp";}
	if($w_icon == "partly-cloudy-night" ){ $w_iconMostrar = "<i class='fas fa-cloud-moon text-info fa-lg'></i>&nbsp";}
	return $w_iconMostrar;
}

function colorSensor($w_temp){
	if 	($w_temp <= 0 ){ $colorSensor1 =  chr(39) ."#343A40". chr(39) ;}
	if 	($w_temp > 0 && $w_temp <= 10 ){ $colorSensor1 =  chr(39) ."#007BFF". chr(39) ;}
	if 	($w_temp > 10 && $w_temp <= 25 ){ $colorSensor1 =  chr(39) ."#28A745". chr(39) ;}
	if 	($w_temp > 25 && $w_temp <= 30 ){ $colorSensor1 =  chr(39) ."#FFC107". chr(39) ;}
	if 	($w_temp > 30 ){ $colorSensor1 =  chr(39) ."#DC3545". chr(39) ;}
	return $colorSensor1;

}

function wind_cardinals($deg) {
  $cardinal=0;
	$cardinalDirections = array(
		'N' => array(348.75, 360),
		'N' => array(0, 11.25),
		'NNE' => array(11.25, 33.75),
		'NE' => array(33.75, 56.25),
		'ENE' => array(56.25, 78.75),
		'E' => array(78.75, 101.25),
		'ESE' => array(101.25, 123.75),
		'SE' => array(123.75, 146.25),
		'SSE' => array(146.25, 168.75),
		'S' => array(168.75, 191.25),
		'SSO' => array(191.25, 213.75),
		'SO' => array(213.75, 236.25),
		'OSO' => array(236.25, 258.75),
		'O' => array(258.75, 281.25),
		'ONO' => array(281.25, 303.75),
		'NO' => array(303.75, 326.25),
		'NNO' => array(326.25, 348.75)
	);
	foreach ($cardinalDirections as $dir => $angles) {
			if ($deg >= $angles[0] && $deg < $angles[1]) {
				$cardinal = $dir;
			}
		}
		return $cardinal;
}
?>
