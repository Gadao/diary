<?php
header("Content-Type:application/json; ");
require_once('loader.php');
$food_url = json_decode(file_get_contents( "http://data.coa.gov.tw/Service/OpenData/CC/FoodData.aspx" ));

foreach ($food_url as $key => $value) {
	foreach ($key as $key2 => $value2) {
		echo $key2;
	}
}


