<?php
header("Content-Type:text/html; charset=utf-8");
require_once('loader.php');
$sql = "INSERT INTO article(city,area,category,picture,title,subtitle,content,x,y) VALUES(?,?,?,?,?,?,?,?,?)";

sql_i($sql,array($_POST['city'],$_POST['area'],$_POST['category'],$_POST['picture'],$_POST['title'],$_POST['subtitle'],$_POST['content'],$_POST['x'],$_POST['y']));