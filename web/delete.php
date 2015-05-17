<?php
	header("Content-Type:text/html; charset=utf-8");
	require_once('../loader.php');
	require_once('./function.php');

	$edi_base = array();
	array_push( $edi_base , $_POST['no'] );
	$sql = "DELETE FROM article WHERE no=? ";
	
	if( sql_i( $sql,$edi_base ) ){
		echo    "<script language=javascript>
            alert('刪除資料成功!!');
            window:location.href='".$_SERVER["HTTP_REFERER"]."';
            </script>";
	}
	else{
		echo    "<script language=javascript>
            alert('刪除資料失敗!!');
            window:location.href='".$_SERVER["HTTP_REFERER"]."';
            </script>";
	}
?>


