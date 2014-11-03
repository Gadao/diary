<?php
header("Content-Type:application/json;");
require_once('loader.php');
$sql = "INSERT INTO articlev VALUES(?,?,?,?,?,?,?,?,?)";
$ans = sql_i($sql,array(NULL,$_POST['city'],$_POST['area'],$_POST['category'],$_POST['picture'],$_POST['title'],$_POST['subtitle'],$_POST['content'],$_POST['x'],$_POST['y'],'1'));

if($ans)
	echo 'success';
else
	echo 'default';