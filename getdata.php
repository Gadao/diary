<?php
header("Content-Type:application/json; ");
require_once('loader.php');

$ans = sql_q("SELECT * FROM article,member WHERE article.mid=member.mid AND no=?",array( $_POST['no']));
$sum = array('map'=>$ans);

echo json_encode($sum);


