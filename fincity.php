<?php
header("Content-Type:application/json; charset=utf-8");
require_once('loader.php');

$ans = sql_q("SELECT * FROM article");
$sum = array('map'=>$ans);

echo json_encode($sum);