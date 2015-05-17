<?php

require_once('loader.php');
$food_url = json_decode(file_get_contents( "http://data.coa.gov.tw/Service/OpenData/CC/FoodData.aspx" ),true);


$opendata = array();
echo 'sss';
for ($i=0; $i < count($food_url) ; $i++) {
	$sql = "INSERT INTO `opendata`(`no`, `title`, `category`, `address`, `x`, `y`, `phone`, `post_id`, `content`, `price`, `city`, `area`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
		
        $city = mb_substr($food_url[$i]['address'],0,3,"utf-8");
        $area = mb_substr($food_url[$i]['address'],3,3,"utf-8");

 	array_push($opendata,null,$food_url[$i]['title'],'food',$food_url[$i]['address'],$food_url[$i]['x'],$food_url[$i]['y'],$food_url[$i]['phone'],$food_url[$i]['post_id'],$food_url[$i]['Description'],$food_url[$i]['price'],$city,$area);
print_r($opendata);	
	$dt = sql_i($sql,$opendata);

	if($dt){
		unset($opendata);
		echo '1';
	}
	     
        




}
/*	unset($food_url[$i]['sc_id']);
        unset($food_url[$i]['link']);
        unset($food_url[$i]['id']);
        unset($food_url[$i]['catalogs_id']);
        unset($food_url[$i]['create_date']);
        unset($food_url[$i]['type']);
}




