<?php
header("Content-Type:application/json; charset=utf-8");
require_once('loader.php');
$default = array('map'=>array('fail'=>'登入失敗');
$ans = sql_q("SELECT * FROM member WHERE account =? AND password=?",array($_POST['account'],$_POST['password']));
$sum = array('map'=>$ans);
if(count($ans)>0)
    echo json_encode($sum);
else
    echo json_encode($default);

