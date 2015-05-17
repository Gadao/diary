<?php
	require_once('loader.php');

	 if ( isset( $_SESSION[ session_id() ] ) ) {
        echo json_encode(array('map'=>array(array('success'=>'success','id'=>$_SESSION[ session_id() ]))));
    } else {
        echo json_encode(array('map'=>array(array('fail'=>'fail'))));
    }

?>
