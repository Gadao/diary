<?php
header("Content-Type:application/json; ");
require_once('loader.php');
$food_url = json_decode(file_get_contents( "http://data.coa.gov.tw/Service/OpenData/CC/FoodData.aspx" ));
$sum = array('map'=>array($food_url->type));


print_r($sum);


