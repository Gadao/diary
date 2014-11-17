<?php
header("Content-Type:application/json; ");
require_once('loader.php');
$weather_url = json_decode(file_get_contents( "http://api.openweathermap.org/data/2.5/weather?lat=".$_GET['lat']."&lon=".$_GET['lon'] ),true);

$opendata = array();
foreach ($weather_url as $key ) {
	echo $key;
	if($key == 'weather' ){
		foreach ($key as $key2 =>$value) {
			// if($key2 == 'icon'){
			// 	$icon = "http://openweathermap.org/img/w/".$value.".png";
			// 	array_push($opendata, $icon);
			// }
			echo $key2;
		}
		
	}
}

 echo json_encode($opendata);


