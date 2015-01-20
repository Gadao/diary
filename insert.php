<?php
header("Content-Type:text/html; charset=utf-8");
require_once('loader.php');
$sql = "INSERT INTO article(no,city,area,category,title,subtitle,content,x,y) VALUES(?,?,?,?,?,?,?,?,?)";

sql_i($sql,array('NULL',$_POST['city'],$_POST['area'],$_POST['category'],$_POST['title'],$_POST['subtitle'],$_POST['content'],$_POST['x'],$_POST['y']));
