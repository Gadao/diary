<?php
    header("Content-Type:text/html; charset=utf-8");
	require_once('../loader.php');
	require_once('./function.php');

	$url = 'http://opendata.cwb.gov.tw/opendata/MFC/F-C0032-005.xml';
	
    $xml = new DOMDocument(); //建立一个DOMDocument 
    $xml->load($url);
    $weather = $xml->getElementsByTagName( "location" );
    
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
                                    <td class="active">地點</td>
                                    <td class="active">Mon</td>
                                    <td class="active">Tues</td>
                                    <td class="active">Wed</td>
                                    <td class="active">Thurs</td>
                                    <td class="active">Fri</td>
                                    <td class="active">Satur</td>
                                    <td class="active">Sun</td>
                                    <td></td>
                                </tr>
                                <?php
                                    foreach ( $weather as $weathers ) 
                                    { 

                                        $locationnames = $weathers->getElementsByTagName( "locationName" );
                                        $locationname = $locationnames->item(0)->nodeValue;
                                        $parameter = $weathers->getElementsByTagName( "parameterValue" );
                                        $title = $weathers->getElementsByTagName( "parameterName" );
                                        echo "<tr>";
                                        echo "<td>".$locationname."</td>";
                                        echo "<td><img title=".$title->item(0)->nodeValue." src=http://www.cwb.gov.tw/V7/symbol/weather/gif/day/".if_weather($parameter->item(0)->nodeValue).".gif>"."</td>";
                                        echo "<td><img title=".$title->item(2)->nodeValue." src=http://www.cwb.gov.tw/V7/symbol/weather/gif/day/".if_weather($parameter->item(2)->nodeValue).".gif>"."</td>";
                                        echo "<td><img title=".$title->item(4)->nodeValue." src=http://www.cwb.gov.tw/V7/symbol/weather/gif/day/".if_weather($parameter->item(4)->nodeValue).".gif>"."</td>";
                                        echo "<td><img title=".$title->item(6)->nodeValue." src=http://www.cwb.gov.tw/V7/symbol/weather/gif/day/".if_weather($parameter->item(6)->nodeValue).".gif>"."</td>";
                                        echo "<td><img title=".$title->item(8)->nodeValue." src=http://www.cwb.gov.tw/V7/symbol/weather/gif/day/".if_weather($parameter->item(8)->nodeValue).".gif>"."</td>";
                                        echo "<td><img title=".$title->item(10)->nodeValue." src=http://www.cwb.gov.tw/V7/symbol/weather/gif/day/".if_weather($parameter->item(10)->nodeValue).".gif>"."</td>";
                                        echo "<td><img title=".$title->item(12)->nodeValue." src=http://www.cwb.gov.tw/V7/symbol/weather/gif/day/".if_weather($parameter->item(12)->nodeValue).".gif>"."</td>";
                                        echo "</tr>";

                                    } 
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <?php require_once('footer.php');?>
        </div>
    </body>
</html>

