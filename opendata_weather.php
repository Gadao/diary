<?php
header("Content-Type:application/json; ");
require_once('loader.php');
$weather_url = json_decode(file_get_contents( "http://api.openweathermap.org/data/2.5/weather?lat=".$_GET['lat']."&lon=".$_GET['lon'] ),true);

$opendata = array();
echo $weather_url['weather']['icon'];
	
$icon = "http://openweathermap.org/img/w/".$weather_url['weather']['icon'].".png";	
array_push($opendata, $icon);




