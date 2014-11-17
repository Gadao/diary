<?php
header("Content-Type:application/json; ");
require_once('loader.php');
$weather_url = json_decode(file_get_contents( "http://api.openweathermap.org/data/2.5/weather?lat=".$_GET['lat']."&lon=".$_GET['lon'] ),true);

<<<<<<< HEAD
$opendata = array("map"=>array());
	
$icon = "http://openweathermap.org/img/w/".$weather_url['weather'][0]['icon'].".png";	
array_push($opendata['map'], $icon);

echo json_encode($opendata);
=======


$icon = "http://openweathermap.org/img/w/".$weather_url['weather'][0]['icon'].".png";
$opendata = array("map"=>array("weather"=>$icon));

echo json_encode($opendata);

>>>>>>> 82238f10261aa20b0294fe0755d90f033ee045fa


