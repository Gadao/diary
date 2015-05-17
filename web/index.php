<?php
    require_once('../loader.php');
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
                <div class="col-md-9" style="background-color:#eee;">
                    <div cass="jumbotron" >
                        <h1>管理者公告</h1>
                        <ul>
                           <li>管理人員在新增,刪除,異動的過程中請斟酌使用。以免不小心處理到使用者的相關資料,謝謝!</li>  
                        </ul>   
                    </div>
                </div>
            </div>
        </div>
        <?php require_once('footer.php');?>
    </body>
</html>
