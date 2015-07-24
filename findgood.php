<?php
header("Content-Type:application/json; ");
require_once('loader.php');

$sql = "SELECT * FROM goods WHERE mid=? AND aid=?";
$dt = sql_q($sql,array($_POST['mid'],$_POST['aid']));

$cou = (count($dt)<1) ? '1' : '0';
if($cou=='1'){
	$ans = '沒有按讚';
}
else if($cou=='0'){

	$ans = '已經按讚';
}

echo json_encode($ans);
