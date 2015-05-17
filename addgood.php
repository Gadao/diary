<?php
header("Content-Type:application/json; ");
require_once('loader.php');

$sql = "SELECT * FROM goods WHERE mid=? AND aid=?";
$dt = sql_q($sql,array($_POST['mid'],$_POST['aid']));

$cou = (count($dt)<1) ? '1' : '0';
if($cou=='1'){
	$sql = "INSERT INTO `goods`(`goods_no`, `mid`, `aid`, `status`) VALUES (?,?,?,?)";
	$ans = sql_i($sql,array(null,$_POST['mid'],$_POST['aid'],$_POST['status']));
	$ans = array('maps'=>array('取消按讚!'));
}
elseif($cou=='0'&&$dt['status']=='1'){
	$sql = "UPDATE goods SET status =? WHERE mid=? AND aid=?";
        $ans = sql_i($sql,array('-1',$_POST['mid'],$_POST['aid']));
	$ans = array('maps'=>array('按讚!!'));
}
elseif($cou=='0'&&$dt['status']=='-1'){
	
	$sql = "UPDATE goods SET status =? WHERE mid=? AND aid=?";
        $ans = sql_i($sql,array('1',$_POSTT['mid'],$_POST['aid']));
        $ans = array('maps'=>array('取消按讚!'));

	}


echo json_encode($ans);

