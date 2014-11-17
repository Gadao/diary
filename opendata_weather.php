<?php
header("Content-Type:application/json; ");
require_once('loader.php');
$weather_url = json_decode(file_get_contents( "http://api.openweathermap.org/data/2.5/weather?lat=".$_GET['lat']."&lon=".$_GET['lon'] ),true);



$icon = "http://openweathermap.org/img/w/".$weather_url['weather'][0]['icon'].".png";
$opendata = array("map"=>array("weather"=>$icon));

echo json_encode($opendata);



