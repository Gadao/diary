<?php
header("Content-Type:application/json; ");
require_once('loader.php');
$food_url = json_decode(file_get_contents( "http://data.coa.gov.tw/Service/OpenData/CC/FoodData.aspx" ),true);

$opendata = array();
for ($i=0; $i < count($food_url) ; $i++) {

	$city = mb_substr($food_url[$i]['address'],0,3,"utf-8");
	$area = mb_substr($food_url[$i]['address'],3,3,"utf-8");
	
	$food_url[$i]['city']=$city;
	$food_url[$i]['area']=$area;
	if($food_url[$i]['x']!='')
	if($food_url[$i]['city']===$_GET['city']){
		$sum_city='1';
		array_push($opendata,$food_url[$i]);	
	}
 	unset($food_url[$i]['sc_id']);
 	unset($food_url[$i]['link']);
 	unset($food_url[$i]['id']);
	unset($food_url[$i]['catalogs_id']);
	unset($food_url[$i]['create_date']);
 	unset($food_url[$i]['type']);
}

echo json_encode($opendata);


