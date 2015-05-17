<?php
header("Content-Type:application/json; ");
require_once('loader.php');

$sql = "INSERT INTO member(mid,name,account,password,sex,goods) VALUES(?,?,?,?,?,?)";

$ans = sql_i($sql,array( null,$_POST['name'],$_POST['account'],$_POST['password'],$_POST['sex'],'0'));

echo json_encode($ans);

