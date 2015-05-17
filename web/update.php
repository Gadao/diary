<?php
	header("Content-Type:text/html; charset=utf-8");
	require_once('../loader.php');
	require_once('./function.php');
	$edi = $_POST;
	$edi_base = array();
	$sql = "UPDATE article SET ";
	foreach ($edi as $key => $value) {
		if( !strcmp( $key , "no" ) ){
			$sql .= "WHERE ".$key."=? ";
			array_push( $edi_base , $value );
			$sql = substr_replace( $sql , " " , strrpos( $sql , ",") , "1" );
		}
		elseif( !empty($value) ){
			$sql .= $key ."=? ,";
			array_push( $edi_base , $value );//這邊邏輯要注意
		}
	}
	if( sql_i( $sql,$edi_base ) ){
		echo    "<script language=javascript>
            alert('編輯資料成功!!');
            window:location.href='".$_SERVER["HTTP_REFERER"]."';
            </script>";
	}
	else{
		echo    "<script language=javascript>
            alert('編輯資料失敗!!');
            window:location.href='".$_SERVER["HTTP_REFERER"]."';
            </script>";
	}
?>


