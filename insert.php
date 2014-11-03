<?php
header("Content-Type:application/json;");
require_once('loader.php');
$sql = "INSERT INTO article('city','area','category','picture','title','subtitle','content','x','y') VALUES(".$_POST['city'].",".$_POST['area'].",".$_POST['category'].",".$_POST['picture'].",".$_POST['title'].",".$_POST['subtitle']..",".$_POST['content']..",".$_POST['x'].",".$_POST['y'].")";


sql_i($sql);

if($ans)
	echo 'success';
else
	echo 'default';