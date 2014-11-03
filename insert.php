<?php
header("Content-Type:application/json;");
require_once('loader.php');
$sql = "INSERT INTO article('no','city','area','category','picture','title','subtitle','content','x','y','mid') VALUES(?,?,?,?,?,?,?,?,?)";
sql_i($sql,array(NULL,$_POST['city'],$_POST['area'],$_POST['category'],$_POST['picture'],$_POST['title'],$_POST['subtitle'],$_POST['content'],$_POST['x'],$_POST['y'],'1'));