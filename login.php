<?php
header("Content-Type:application/json; ");
require_once('loader.php');
$default = array('map'=>array(array('fail'=>'fail')));
$ans = sql_q("SELECT * FROM member WHERE account =? AND password=?",array( $_POST['account'],$_POST['password'] ));
$sum = array('map'=>$ans,'id'=>session_id());
if(count($ans)>0){
	$_SESSION[ session_id() ]= $ans;
    echo json_encode($sum);
	
}
else{
    echo json_encode($default);
}

