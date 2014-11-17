<?php
header("Content-Type:application/json; ");
require_once('loader.php');
$food_url = json_decode("http://data.coa.gov.tw/Service/OpenData/CC/FoodData.aspx" );
unset($food_url['sc_id']);

echo json_encode($food_url);


