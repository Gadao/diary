<?php
header("Content-Type:application/json; ");
require_once('loader.php');

$sql = "SELECT count(mid) FROM member WHERE 1"
$dt = sql_q($sql,array());
$sql_2 = "SELECT SUM(status) FROM goods WHERE aid=?";
$ans = sql_q($sql_2,array($_POST['aid']));

echo 
