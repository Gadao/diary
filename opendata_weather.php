<?php
header("Content-Type:application/json; ");
require_once('loader.php');
$weather_url = json_decode(file_get_contents( "http://api.openweathermap.org/data/2.5/weather?lat=".$_GET['lat']."&lon=".$_GET['lon'] ),true);

$opendata = array();
foreach ($weather_url as $key => $value) {
	echo $key;
}

// echo json_encode($weather_url);


