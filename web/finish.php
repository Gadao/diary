<?php
	header("Content-Type:text/html; charset=utf-8");
	require_once('../loader.php');
	require_once('./function.php');
	
	$sql = "INSERT INTO article(no,city,category,title,content,x,y,picture_name,mid) VALUES(?,?,?,?,?,?,?,?,?)";
	
	if( sql_i($sql,array('NULL',$_POST['city'],$_POST['category'],$_POST['title'],$_POST['content'],$_POST['x'],$_POST['y'],$_POST['picture_name'],$_POST['mid']))){
		echo    "<script language=javascript>
            alert('新增資料成功!!');
            window:location.href='".$_SERVER["HTTP_REFERER"]."';
            </script>";
	}
	else{
		echo    "<script language=javascript>
            alert('新增資料失敗!!');
            window:location.href='".$_SERVER["HTTP_REFERER"]."';
            </script>";
	}
?>


