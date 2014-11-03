<?php
header("Content-Type:application/json; ");
require_once('loader.php');

$ans = sql_q("SELECT * FROM article WHERE city=? AND area=?",array( $_POST['city'],$_POST['area']));
$sum = array('map'=>$ans);

echo json_encode($sum);


