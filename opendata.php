<?php
header("Content-Type:application/json; ");
require_once('loader.php');
$food_url = json_decode(file_get_contents( "http://data.coa.gov.tw/Service/OpenData/CC/FoodData.aspx" ),true);

$opendata = array();
for ($i=0; $i < count($food_url) ; $i++) {  	
 	unset($food_url[$i]['sc_id']);
}

echo json_encode($food_url);


