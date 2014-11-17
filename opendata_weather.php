<?php
header("Content-Type:application/json; ");
require_once('loader.php');
$weather_url = json_decode(file_get_contents( "http://api.openweathermap.org/data/2.5/weather?lat=".$_POST['lat']."&lon=".$_POST['lon'] ),true);


	
$icon = $weather_url['weather'][0]['icon'].".png";	
$opendata = array("map"=>array( "weather"=> "$icon" ));

echo json_encode($opendata);



