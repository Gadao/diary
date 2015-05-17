<?php
header("Content-Type:text/html; charset=utf-8");
require_once('loader.php');
	$datetime = date ("YmdHis"); 
	$file_path = "picture/";
	$file_path = $file_path . basename( $_FILES['uploaded_file']['name'] );	
	move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $file_path);
	$file_path2 = "picture/";
	$file_path2 = $file_path2 . basename( $_FILES['uploaded_file_small']['name'] );	
	move_uploaded_file($_FILES['uploaded_file_small']['tmp_name'], $file_path2);
$sql = "INSERT INTO article(no,category,city,title,content,x,y,picture_name,picture_name_small,mid,insert_time,area) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";

sql_i($sql,array(null,$_POST['category'],$_POST['city'],$_POST['title'],$_POST['content'],$_POST['x'],$_POST['y'],$_FILES['uploaded_file']['name'],$_FILES['uploaded_file_small']['name'],$_SESSION[ session_id() ][0]['mid'],$datetime,$_POST['area']));//$_SESSION[ session_id() ][0]['mid']));
