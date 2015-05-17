<?php
header("Content-Type:application/json; ");
require_once('loader.php');

$sql = "SELECT SUM(status) FROM goods WHERE aid=?";
$ans = sql_q($sql,array($_POST['aid']));


echo json_encode($ans);

