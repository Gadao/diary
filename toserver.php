<?php
  require_once('loader.php');
   $file_path = "picture/";
     
   $file_path = $file_path . basename( $_FILES['uploaded_file']['name'] );
	echo $_FILES['uploaded_file']['name'];
   if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $file_path)) {
   	$sum = array('map'=>array(array('status'=>'success')));
    echo json_encode($sum);
   } else{
       $sum = array('map'=>array(array('status'=>'fail')));
    echo json_encode($sum);
   }
?>