<?php
header("Content-Type:application/json; ");
require_once('loader.php');
$food_url = json_decode(file_get_contents( "http://data.coa.gov.tw/Service/OpenData/CC/FoodData.aspx" ),true);

$opendata = array();
for ($i=0; $i < count($food_url) ; $i++) {
	if($food_url[$i]['x']=='')  {
		unset($food_url[$i]);
		continue;
	}
	if(isset($food_url[$i]['address'])){
		$arr_address = str_split($food_url[$i]['address']));
		$city = $arr_address[0].$arr_address[1].$arr_address[2];
		$area = $arr_address[3].$arr_address[4].$arr_address[5];
	}
	$food_url[$i]['city']=$city;
	$food_url[$i]['area']=$area;
 	unset($food_url[$i]['sc_id']);
 	unset($food_url[$i]['link']);
 	unset($food_url[$i]['id']);
	unset($food_url[$i]['catalogs_id']);
	unset($food_url[$i]['create_date']);
 	unset($food_url[$i]['type']);
}

echo json_encode($food_url);


