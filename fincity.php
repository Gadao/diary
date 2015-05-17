<?php
header("Content-Type:application/json; ");
require_once('loader.php');

$ans = sql_q("SELECT * FROM article WHERE city LIKE '".$_POST['city']."'");
$sum = array('map'=>$ans);

echo json_encode($sum);


