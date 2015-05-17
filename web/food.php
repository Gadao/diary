<?php
	require_once('../loader.php');
	require_once('./function.php');
	$url = 'http://data.coa.gov.tw/Service/OpenData/CC/FoodData.aspx?$top=10&$skip=';
	if( !empty($_GET['skip']) || $_GET['skip']>0){
		$url .= $_GET['skip']*10;
		$page=$_GET['skip'];
	}
	else{
		$url .= '10';
		$page=1;
	}
	$food_url = json_decode(file_get_contents_curl( $url ),true);
?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>庶民生活日記</title>
        <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css" />
        <meta ContentType=html/text; charset=utf-8>
        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"/>
    </head>
    <body>
        <div class="container">
            <div class="row">
		        <?php require_once('top.php'); ?>
                <?php require_once('side.php'); ?>
                <div class="col-md-9">
                    <div cass="jumbotron">
                        <div class="table-responsive">
                            <table class="table">
                                <tr class="active">
                                    <td class="active">標題</td>
                                    <td class="active">電話</td>
                                    <td class="active">地址</td>
                                </tr>
                                <?php 
                                	for ($i=1; $i < count($food_url) ; $i++) 
									{
										echo '<tr>';
										echo '<td>'.$food_url[$i]['title'].'</td>';
										echo '<td>'.$food_url[$i]['phone'].'</td>';
										echo '<td>'.$food_url[$i]['address'].'</td>';
										echo '</tr>';
									}
                                ?>
                            </table>
                            <ul class="pagination">                        
                            <?php
                            	if(($page-5)<1)
                            		$leftpage=0;
                            	else
                            		$leftpage=$page-5;
                            	$lefturl='http://apps.csie.stu.edu.tw/~s12113240/diary/web/food.php?skip='.($leftpage);
                            	echo '<li><a href="'.$lefturl.'">&laquo;</a></li>';
                            	$guesspage=($page-2);
                            	if($guesspage<=0)
                            		$guesspage=1;
                            	for($i=$guesspage;$i<($guesspage+5);$i++){
                            		$nexturl='http://apps.csie.stu.edu.tw/~s12113240/diary/web/food.php?skip='.$i;
                            		echo '<li><a href="'.$nexturl.'">'.$i.'</a></li>';
                            	}
                            	$rightpage=$page+5;
                            	$righturl='http://apps.csie.stu.edu.tw/~s12113240/diary/web/food.php?skip='.($rightpage);
                            	echo '<li><a href="'.$righturl.'">&raquo;</a></li>';
                            ?>
							</ul>
                        </div>   
                    </div>   
                </div>
            </div>
            <?php require_once('footer.php');?>
        </div>
    </body>
</html>

